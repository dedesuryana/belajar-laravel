<?php

namespace App\Policies;

use App\User;
use App\Siswa;
use Illuminate\Auth\Access\HandlesAuthorization;

class SiswaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function delete(User $user, Siswa $siswa)
    {
        return $user->role === $siswa->siswa;
    }

    public function buka(User $user, Siswa $siswa)
    {
        return $user->role === $siswa->admin;
    }
}
