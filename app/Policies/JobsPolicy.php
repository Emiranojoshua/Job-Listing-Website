<?php

namespace App\Policies;

use App\Models\Jobs;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class JobsPolicy
{

    public function edit(User $user, Jobs $job): bool
    {
        //u
        // logger($job->employers->ser);
        return $job->employers->user->is($user);
    }

    public function create(User $user): bool
    {
        return !empty($user->employer_name);
    }
}
