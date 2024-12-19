<?php

namespace App\Jobs;

use App\Services\WhatsappService;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendWhatsAppMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $number;
    protected $type;
    protected $message;
    protected $instanceId;

    /**
     * Create a new job instance.
     */
    public function __construct(string $number, string $type, string $message, string $instanceId)
    {
        //
        $this->number = $number;
        $this->type = $type;
        $this->message = $message;
        $this->instanceId = $instanceId;
    }

    /**
     * Execute the job.
     */
    public function handle(WhatsappService $WhatsAppService)
    {
        //
        $response = $WhatsAppService->sendMessage(
            $this->number,
            $this->type,
            $this->message,
            $this->instanceId

        );
    }
}