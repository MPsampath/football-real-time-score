<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class scoreBord implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $teamAScore;
    public $teamBScore;
    public $status;
    public $matchtimeCountdoun;
    /**
     * Create a new event instance.
     */
    public function __construct($request)
    {
        $this->teamAScore = $request->query('score')['teamA'];
        $this->teamBScore = $request->query('score')['teamB'];
        $this->status = $request->query('score')['status'];
        $this->matchtimeCountdoun = $request->query('score')['remainingtime'];
    }

    public function broadcastWith():array
    {
        return[
            'teamA'=>$this->teamAScore,
            'teamB'=>$this->teamBScore,
            'status'=>$this->status,
            'matchtimeCountdoun'=>$this->matchtimeCountdoun,
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('score-update'),
        ];
    }
}
