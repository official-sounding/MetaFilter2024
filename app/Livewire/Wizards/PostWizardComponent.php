<?php

declare(strict_types=1);

namespace App\Livewire\Wizards;

use App\Dtos\PostDto;
use App\Enums\NotificationMessageEnum;
use App\Enums\NotificationTypeEnum;
use App\Enums\PostStateEnum;
use App\Http\Requests\Post\StoreBodyAndMoreInsideRequest;
use App\Http\Requests\Post\StoreMoreInsideRequest;
use App\Http\Requests\Post\StoreTitleAndLinkRequest;
use App\Models\Post;
use App\Services\PostService;
use App\Traits\PostTrait;
use App\Traits\RedirectTrait;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;

final class PostWizardComponent extends BaseWizardComponent
{
    use PostTrait;
    use RedirectTrait;
    use SubsiteTrait;

    public array $steps = [
        'Write Post',
        'Add Tags',
        'Preview',
    ];

    public string $title = '';
    public ?string $link_url;
    public ?string $link_text;
    public string $body;
    public string $more_inside;
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

    // Step 1
    public function submitTitleAndLink(): void
    {
        $rules = (new StoreTitleAndLinkRequest())->rules();

        $this->validate($rules);

        $this->currentStep = 2;
    }

    // Step 2
    public function submitBody(): void
    {
        $rules = (new StoreBodyAndMoreInsideRequest())->rules();

        $this->validate($rules);

        $this->currentStep = 3;
    }

    // Step 3
    public function submitMoreInside(): void
    {
        $rules = (new StoreMoreInsideRequest())->rules();

        $this->validate($rules);

        $this->saveAsPending();

        $this->currentStep = 4;
    }

    // Step 4
    public function preview(): void {}

    public function saveAsDraft(): void
    {
        $post = $this->storePost(PostStateEnum::Draft->value);

        if ($post->id) {
            $url = $this->getPostShowUrl($post);
            $type = NotificationTypeEnum::Success->value;
            $message = NotificationMessageEnum::PostDraftSuccess->value;
        } else {
            $url = route('aa');
            $type = NotificationTypeEnum::Error->value;
            $message = NotificationMessageEnum::PostDraftFailure->value;
        }

        $this->redirectToUrlWithNotification($url, $type, $message);
    }

    public function saveAsPending(): void
    {
        $this->storePost(PostStateEnum::Pending->value);
    }

    public function publish(): void
    {
        $now = now()->format('Y-m-d H:i:s');

        $post = $this->storePost(PostStateEnum::Published->value, $now, true);

        if ($post->id) {
            $url = $this->getPostShowUrl($post);
            $type = NotificationTypeEnum::Success->value;
            $message = NotificationMessageEnum::PostPublishSuccess->value;
        } else {
            $url = route('aa');
            $type = NotificationTypeEnum::Error->value;
            $message = NotificationMessageEnum::PostPublishFailure->value;
        }

        $this->redirectToUrlWithNotification($url, $type, $message);
    }

    public function storePost(string $state, ?string $publishedAt = null, bool $isPublished = false): Post
    {
        $dto = new PostDto(
            title: $this->title,
            body: $this->body,
            more_inside: $this->more_inside,
            subsite_id: $this->subsiteId,
            state: $state,
            published_at: $publishedAt,
            is_published: $isPublished,
        );

        return $this->postService->store($dto);
    }
}
