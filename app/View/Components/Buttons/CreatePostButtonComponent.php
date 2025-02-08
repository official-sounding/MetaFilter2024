<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class CreatePostButtonComponent extends Component
{
    use SubsiteTrait;

    public array $links;

    protected string $subdomain;

    public function __construct()
    {
        $this->subdomain = $this->getSubdomain();

        $this->links = config("metafilter.navigation.create-post-links.$this->subdomain");
    }

    public function render(): View
    {
        return view('components.buttons.create-post-button-component', [
            'createPostText' => $this->getNewPostText(),
            'links' => $this->links,
        ]);
    }
}
