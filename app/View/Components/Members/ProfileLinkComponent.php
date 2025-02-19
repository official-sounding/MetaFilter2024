<?php

declare(strict_types=1);

namespace App\View\Components\Members;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class ProfileLinkComponent extends Component
{
    public string $filename = 'person';
    public bool $showIcon = true;
    public string $titleText = '';
    public int $userId = 0;
    public User $user;

    public function __construct(User $user, bool $showIcon = true)
    {
        $this->user = $user;

        $this->filename = $this->getFilename();

        $this->showIcon = $showIcon;

        $this->titleText = $this->getTitleText();
    }

    public function render(): View
    {
        return view('components.members.profile-link-component', [
            'user' => $this->user,
            'filename' => $this->filename,
            'showIcon' => $this->showIcon,
        ]);
    }

    private function getFilename(): string
    {
        return $this->user === auth()->user() ? $this->filename : 'person-fill';
    }

    private function getTitleText(): string
    {
        return 'View ' . $this->user->username . "'s profile";
    }
}
