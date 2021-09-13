<?php

namespace App\Containers\AppSection\User\Tasks;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Tasks\Task;

class CreatePasswordResetTask extends Task
{
    public function run(User $user): string
    {
        return app('auth.password.broker')->createToken($user);
    }
}
