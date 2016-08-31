<?php
/**
 * Created by PhpStorm.
 * User: elp
 * Date: 8/31/16
 * Time: 2:44 PM
 */

namespace App\Events;

use App\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserWasRegistered extends Event
{
    use SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function broadcastOn()
    {
        return [];
    }

}