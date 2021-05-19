<?php

namespace App\Actions;

use App\Models\User;
use App\Contracts\RemovesTimeTracking;

class RemoveTimeTracking implements RemovesTimeTracking
{
    public function remove(User $user, $timeTrackingId)
    {
        $user->currentLocation->timeTrackings()->whereKey($timeTrackingId)->delete();
    }
}
