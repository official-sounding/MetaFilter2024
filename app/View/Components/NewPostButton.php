<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Traits\SubsiteTrait;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class NewPostButton extends Component
{
    use SubsiteTrait;

    public string $buttonText;
    public string $routeName;
    public string $subdomain;

    public function __construct()
    {
        $this->subdomain = $this->getSubdomainFromUrl();

        $this->buttonText = $this->getPostButtonText($this->subdomain);
        $this->routeName = $this->getNewPostRouteName($this->subdomain);
    }

    public function render(): View|Closure|string
    {
        return view('components.new-post-button', [
            'buttonText' => $this->buttonText,
            'routeName' => $this->routeName,
        ]);
    }
}
