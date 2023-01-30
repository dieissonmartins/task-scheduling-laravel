<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $email_origin;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $email_origin)
    {
        $this->email_origin = $email_origin;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
