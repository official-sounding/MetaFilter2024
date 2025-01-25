<?php

declare(strict_types=1);

namespace App\Livewire\Wizards;

use App\Dtos\PostDto;
use App\Enums\StatusEnum;
use App\Http\Requests\Post\StoreBodyRequest;
use App\Http\Requests\Post\StoreMoreInsideRequest;
use App\Http\Requests\Post\StoreTitleAndLinkRequest;
use App\Models\Post;
use App\Services\PostService;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;

final class PostWizardComponent extends BaseWizardComponent
{
    use SubsiteTrait;

    public string $title = '';
    public string $link_url;
    public string $link_text;
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
        $rules = (new StoreBodyRequest())->rules();

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
    public function submitTags(): void
    {
        $this->currentStep = 5;
    }

    public function saveAsDraft(): void {
        $this->storePost(StatusEnum::Draft->value);
    }

    public function saveAsPending(): void {
        $this->storePost(StatusEnum::Pending->value);
    }

    public function publish(): void
    {
        $now = now()->format('Y-m-d H:i:s');

        $this->storePost(StatusEnum::Published->value, $now, true);
    }

    public function storePost(string $status, ?string $publishedAt = null, bool $isPublished = false): bool
    {
        $dto = new PostDto(
            title: $this->title,
            body: $this->body,
            more_inside: $this->more_inside,
            subsite_id: $this->subsiteId,
            status: $status,
            published_at: $publishedAt,
            is_published: $isPublished,
        );

        return $this->postService->store($dto);
    }
}
