<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use App\Models\Post;
use App\Repositories\FlagReasonRepositoryInterface;
use App\Repositories\FlagRepositoryInterface;
use App\Traits\AuthStatusTrait;

class FlagPostComponent
{
    use AuthStatusTrait;

    public Post $post;

    public array $flagReasons = [];
    public string $note = '';
    public int $authorizedUserId;
    public int $selectedReasonId;
    public int $flagCount = 0;
    public bool $userFlagged = false;
    public bool $showForm = false;

    protected FlagReasonRepositoryInterface $flagReasonRepository;

    protected FlagRepositoryInterface $flagRepository;

    public function mount(
        Post                          $post,
        FlagReasonRepositoryInterface $flagReasonRepository,
        FlagRepositoryInterface       $flagRepository,
    ): void {
        $this->post = $post;

        $this->flagReasonRepository = $flagReasonRepository;
        $this->flagRepository = $flagRepository;

        $this->flagReasons = $this->flagReasonRepository->getDropdownValues('text');

        $this->authorizedUserId = $this->getAuthorizedUserId();

        $this->updateFlagData();
    }
}
