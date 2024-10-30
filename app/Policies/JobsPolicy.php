<?php

namespace App\Policies;

use App\Models\Jobs;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobsPolicy
{

    public function edit(User $user, Jobs $job): bool
    {
        //
        return $job->employers->user->is($user);
    }
}
