<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

final class SendVerificationEmail implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle(): void
    {
        Mail::send(new VerifyEmail($this->user));
    }
}
