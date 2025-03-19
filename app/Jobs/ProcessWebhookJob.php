<?php

declare(strict_types=1);

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

final class ProcessWebhookJob extends SpatieProcessWebhookJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public function handle(): void
    {
        // `$this->webhookCall` contains an instance of:
        // `\Spatie\WebhookClient\Models\WebhookCall`

        $event = Arr::get($this->webhookCall->payload, 'event');
        $data = Arr::get($this->webhookCall->payload, 'data', []);

        logger('ProcessWebhookJob', [
            'event' => $event,
            'data' => $data,
        ]);
    }
}
