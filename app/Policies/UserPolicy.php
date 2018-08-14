<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * 用户授权策略类
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //做更新操作时判断操作用户和登录用户是否相同
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    //判断当前用户是否管理权限且操作用户不是自己
    public function destroy(User $currentUser, User $user)
    {
         return $currentUser->is_admin && $currentUser->id !== $user->id;
    }
}
