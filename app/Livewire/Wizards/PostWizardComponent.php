<?php

declare(strict_types=1);

namespace App\Livewire\Wizards;

use App\Dtos\PostDto;
use App\Enums\NotificationMessageEnum;
use App\Enums\NotificationTypeEnum;
use App\Enums\PostStateEnum;
use App\Http\Requests\Post\StorePostRequest;
use App\Models\Post;
use App\Services\PostService;
use App\Traits\DateAndTimeTrait;
use App\Traits\PostTrait;
use App\Traits\RedirectTrait;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;

final class PostWizardComponent extends BaseWizardComponent
{
    use DateAndTimeTrait;
    use PostTrait;
    use RedirectTrait;
    use SubsiteTrait;

    public array $steps = [
        'Write Post',
        'Add Tags',
        'Preview',
    ];

    public string $title = '';
    public ?string $link_url = '';
    public ?string $link_text = '';
    public string $body = '';
    public string $more_inside = '';
    public string $state = '';
    public ?string $published_at = null;
    public bool $is_published = false;

    public Post $post;
    public int $subsiteId;

    private PostService $postService;

    public function boot(PostService $postService): void
    {
        $this->postService = $postService;
        $this->subsiteId = $this->getSubsiteFromUrl()->id;
    }

    public function render(): View
    {
        return view('livewire.wizards.posts.post-wizard-component');
    }

    public function rules(): array
    {
        return (new StorePostRequest())->rules();
    }

    // Step 1
    public function saveAsPending(): void
    {
        $this->validate();

        $stored = $this->storePost();

        if ($stored) {
            $this->post = $stored;
            $this->currentStep = 2;
        } else {
        }
    }

    // Step 2
    public function submitTags(): void
    {
        $this->currentStep = 3;
    }

    public function saveAsDraft(): void
    {
        $state = PostStateEnum::Draft->value;

        $data = [
            'state' => $state,
        ];

        $updated = $this->postService->update($this->post->id, $data);

        if ($updated) {
            $url = $this->getPostShowUrl($this->post);
            $type = NotificationTypeEnum::Success->value;
            $message = NotificationMessageEnum::PostDraftSuccess->value;

            $this->redirectToUrlWithNotification($url, $type, $message);
        } else {
            // TODO: Add error message
        }
    }

    public function publishPost(): void
    {
        $publishedAt = $this->getFormattedInsertDateTime(now());

        $data = [
            'published_at' => $publishedAt,
            'is_published' => true,
        ];

        $published = $this->postService->update($this->post->id, $data);

        if ($published) {
            $url = $this->getPostShowUrl($this->post);
            $type = NotificationTypeEnum::Success->value;
            $message = NotificationMessageEnum::PostPublishSuccess->value;

            $this->redirectToUrlWithNotification($url, $type, $message);
        } else {
            // TODO: Add error message
        }
    }

    private function storePost(): ?Post
    {
        $state = PostStateEnum::Pending->value;

        $dto = new PostDto(
            title: $this->title,
            link_url: $this->link_url ?? null,
            link_text: $this->link_text ?? null,
            body: $this->body,
            more_inside: $this->more_inside,
            user_id: auth()->id(),
            subsite_id: $this->subsiteId,
            state: $state,
            published_at: null,
            is_published: false,
        );

        return $this->postService->store($dto);
    }
}
