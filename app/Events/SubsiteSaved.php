<?php

declare(strict_types=1);

namespace App\Events;

use App\Models\Subsite;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

final class SubsiteSaved
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public function __construct(
        public Subsite $subsite,
    ) {}
}
