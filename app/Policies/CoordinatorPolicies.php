<?php

namespace App\Policies;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoordinatorPolicies
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(User $auth)
    {
        if($auth->isCoordinador())
        {
            return true;
        }
    }

    public function belongCoordinator(User $auth, Request $request)
    {
        if($auth->isCoordinador())
        {
            if(in_array('1', $request->role) || in_array('2', $request->role) || !in_array('3', $request->role))
            {
                return false;
            }
            return true;
        }
    }

}
