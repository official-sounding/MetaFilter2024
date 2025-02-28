<?php

declare(strict_types=1);

namespace App\View\Components\Snippets;

use App\Repositories\SnippetRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class SnippetComponent extends Component
{
    public string $slug;
    public ?bool $smallText;

    public function __construct(
        string $slug,
        protected SnippetRepositoryInterface $snippetRepository,
        bool $smallText = false,
    ) {
        $this->slug = $slug;
        $this->smallText = $smallText;
    }

    public function render(): View
    {
        $snippet = $this->snippetRepository->getBySlug($this->slug);

        return view('components.snippets.snippet-component', [
            'snippet' => $snippet->body ?? null,
            'smallText' => $this->smallText,
        ]);
    }
}
