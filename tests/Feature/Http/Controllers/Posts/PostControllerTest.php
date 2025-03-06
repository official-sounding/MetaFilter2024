<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Posts;

use App\Models\Post;
use App\Models\Subsite;
use App\Models\User;
use App\Repositories\FlagReasonRepositoryInterface;
use App\Repositories\PostRepositoryInterface;
use App\Services\LdJsonService;
use App\Services\PostService;
use App\Traits\SubsiteTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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

    protected MockInterface $flagReasonRepository;
    protected MockInterface $ldJsonService;
    protected MockInterface $postRepository;
    protected MockInterface $postService;
    protected Post $post;
    protected Subsite $subsite;
    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->flagReasonRepository = $this->mock(FlagReasonRepositoryInterface::class);
        $this->ldJsonService = $this->mock(LdJsonService::class);
        $this->postRepository = $this->mock(PostRepositoryInterface::class);
        $this->postService = $this->mock(PostService::class);

        $this->user = User::factory()->create();

        $this->post = Post::factory()->create([
            'user_id' => $this->user->id,
            'title' => 'Test Post Title',
            'slug' => 'test-post-title',
            'body' => 'Test post body content',
        ]);

        $this->subsite = Subsite::factory()->create();
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    #[Test]
    #[DataProvider('subdomainData')]
    public function index_displays_post_index_page_successfully(string $name, string $subdomain): void
    {
        // Arrange
        $subsite = Subsite::factory()->make(
            [
                'name' => $name,
                'subdomain' => $subdomain,
            ],
        );

        Post::factory()->make([
            'subsite_id' => $subsite->id,
        ]);

        $routeName = $this->getPostIndexRouteName($subdomain);

        // Act
        $response = $this->get(route($routeName));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('posts.index');
    }
}
