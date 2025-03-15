<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Posts;

use App\Http\Controllers\Posts\PostController;
use App\Models\Post;
use App\Models\Subsite;
use App\Models\User;
use App\Repositories\PostRepositoryInterface;
use App\Services\LdJsonService;
use App\Services\PostService;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Mockery\MockInterface;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use Tests\Feature\BaseFeatureTest;

final class PostControllerTest extends BaseFeatureTest
{
    use RefreshDatabase;
    use SubsiteTrait;
    use WithFaker;

    protected MockInterface $ldJsonService;
    protected MockInterface $postRepository;
    protected MockInterface $postService;
    protected Post $post;
    protected Subsite $subsite;
    protected User $user;
    protected PostController $controller;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ldJsonService = $this->mock(abstract: LdJsonService::class);
        $this->postRepository = $this->mock(abstract: PostRepositoryInterface::class);
        $this->postService = $this->mock(abstract: PostService::class);

        $this->user = User::factory()->create();

        $this->getController();
    }

    #[Test]
    #[DataProvider('subdomainData')]
    public function index_page_displays_successfully(string $name, string $subdomain): void
    {
        // Arrange
        Subsite::factory()->create([
            'name' => $name,
            'subdomain' => $subdomain,
        ]);

        $request = Request::create('/');

        $host = $this->getHost($subdomain);

        $request->headers->set(key: 'HOST', values: $host);

        $this->app['config']->set('app.domain', $host);
        $this->app['config']->set('app.url', 'https://' . $host);

        // Act
        $response = $this->controller->index();

        // Assert
        $this->assertInstanceOf(expected: View::class, actual: $response);
        $this->assertEquals(expected: 'posts.index', actual: $response->getName());
        $this->assertArrayHasKey(key: 'title', array: $response->getData());
        $this->assertArrayHasKey(key: 'showSecondaryNavigation', array: $response->getData());
        $this->assertTrue($response->getData()['showSecondaryNavigation']);
    }

    #[Test]
    #[DataProvider('subdomainData')]
    public function show_page_displays_successfully(string $name, string $subdomain): void
    {
        $this->markTestIncomplete();

        // Arrange
        $subsite = $this->getSubsite($name, $subdomain);

        if (isset($subsite->id)) {
            $post = Post::factory()->create([
                'subsite_id' => $subsite->id,
            ]);
        }

        if (!isset($post->id)) {
            exit();
        }

        $host = $this->getHost($subdomain);

        $this->app['config']->set('app.domain', $host);
        $this->app['config']->set('app.url', 'https://' . $host);

        $this->postRepository->shouldReceive('getRelatedPosts')
            ->with($post)
            ->andReturn([]);

        $this->ldJsonService->shouldReceive('generatePostJsonLd')
            ->with($post)
            ->andReturn(['@context' => 'https://schema.org']);

        // Act
        $response = $this->controller->show($post);

        // Assert
        $this->assertInstanceOf(expected: View::class, actual: $response);
        $this->assertEquals(expected: 'posts.show', actual: $response->getName());
        $this->assertArrayHasKey(key: 'title', array: $response->getData());
        $this->assertArrayHasKey(key: 'showSecondaryNavigation', array: $response->getData());
        $this->assertTrue($response->getData()['showSecondaryNavigation']);
    }

    private function getController(): void
    {
        $this->controller = new PostController(
            $this->ldJsonService,
            $this->postRepository,
            $this->postService,
        );
    }
}
