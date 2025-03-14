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
use Mockery;
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

        $this->ldJsonService = $this->mock(LdJsonService::class);
        $this->postRepository = $this->mock(PostRepositoryInterface::class);
        $this->postService = $this->mock(PostService::class);

        $this->user = User::factory()->create();

        $this->getController();
        $this->getPost();
    }

    protected function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }

    #[Test]
    #[DataProvider('subdomainData')]
    public function index_page_displays_successfully(string $name, string $subdomain): void
    {
        // Arrange
        $subsite = Subsite::factory()->create([
            'name' => $name,
            'subdomain' => $subdomain,
        ]);

        if (isset($subsite->id)) {
            Post::factory()->create([
                'subsite_id' => $subsite->id,
            ]);
        }

        $request = Request::create('/');

        $host = "$subdomain.metafilter.test";

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
        $subsite = Subsite::factory()->create([
            'name' => $name,
        ]);

        if (isset($subsite->id)) {
            $post = Post::factory()->create([
                'subsite_id' => $subsite->id,
            ]);
        }

        $request = Request::create("$post->id/$post->slug");

        $host = "$subdomain.metafilter.test";

        $request->headers->set(key: 'HOST', values: $host);

        $this->app['config']->set('app.domain', $host);
        $this->app['config']->set('app.url', 'https://' . $host);

        // Set up expectations for related methods called in show()
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

    private function getPost(): void
    {
        $this->post = Post::factory()->create([
            'user_id' => $this->user->id,
            'title' => 'Test Post Title',
            'slug' => 'test-post-title',
            'body' => 'Test post body content',
        ]);
    }
}
