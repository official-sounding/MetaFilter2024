<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class CreatePostButtonComponent extends Component
{
    use SubsiteTrait;

    public array $links;

    protected string $subdomain;
    protected const string DEFAULT_CREATE_POST_TEXT = 'Create Post';

    public function __construct()
    {
        $this->subdomain = $this->getSubdomainFromUrl();

        $this->links = config("metafilter.navigation.create-post-links.$this->subdomain");
    }

    public function render(): View
    {
        return view('components.create-post-button-component', [
            'defaultCreatePostText' => self::DEFAULT_CREATE_POST_TEXT,
            'links' => $this->links,
        ]);
    }
}
