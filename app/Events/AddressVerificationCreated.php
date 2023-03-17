<?php

namespace App\Events;

// use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
// use Illuminate\Broadcasting\PresenceChannel;
// use Illuminate\Broadcasting\PrivateChannel;
// use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AddressVerificationCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $res, $address_verification_id;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($res, $address_verification_id)
    {
        $this->res = $res;
        $this->$address_verification_id = $address_verification_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    // public function broadcastOn()
    // {
    //     return new PrivateChannel('channel-name');
    // }
}
