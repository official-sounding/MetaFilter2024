<?php

declare(strict_types=1);

namespace App\Livewire\Wizards;

use App\Models\Post;
use Illuminate\Contracts\View\View;

final class PostWizardComponent extends BaseWizardComponent
{
    public string $title = '';
    public string $link_url;
    public string $link_text;
    public string $body;
    public string $more_inside;
    public Post $post;
    public int $subsiteId;

    public function boot(): void
    {
        $this->post = Post::make();

        $subsite = $this->getSubsiteFromUrl();

        $this->post->subsite_id = $subsite->id;
        $this->post->user_id = auth()->id();
    }

    public function render(): View
    {
        return view('livewire.wizards.posts.post-wizard-component');
    }

    // Step 1
    public function submitTitleAndLink(): void
    {
        // TODO: Match max lengths with database field lengths

        $this->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'link_text' => [
                'required',
                'string',
                'max:255',
            ],
            'link_url' => [
                'required',
                'string',
                'max:255',
                'url:https',
                'active_url',
            ],
        ]);

        $this->post->title = $this->title;
        $this->post->link_text = $this->link_text ?? null;
        $this->post->link_url = $this->link_url ?? null;

        $this->currentStep = 2;
    }

    // Step 2
    public function submitBody(): void
    {
        $this->validate([
            'body' => [
                'required',
                'string',
                'max:255',
            ],
        ]);

        $this->post->body = $this->body;

        $this->currentStep = 3;
    }

    // Step 3
    public function submitMoreInside(): void
    {
        $this->validate([
            'more_inside' => [
                'required',
                'string',
                'max:255',
            ],
        ]);

        $this->post->more_inside = $this->more_inside;

        $this->currentStep = 4;
    }

    // Step 4
    public function submitTags(): void
    {
        $this->validate([
            'name' => [
                'nullable',
                'string',
                'max:255',
            ],
            'homepage_url' => [
                'nullable',
                'string',
                'max:255',
                'url:https',
                'active_url',
            ],
        ]);

        $this->currentStep = 5;
    }

    public function saveAsDraft(): void {}

    public function publish(): void
    {
        $this->post->published_at = now();
        $this->post->is_published = true;

        $this->store();
    }

    public function store(): void
    {
        $this->post->save();
    }

    public function resetForm(): void
    {
        $this->title = '';
        $this->link_text = '';
        $this->link_url = '';
        $this->body = '';
        $this->more_inside = '';

        $this->post = Post::make();
    }
}
