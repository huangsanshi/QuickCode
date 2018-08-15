<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * 操作的字段
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * 隐藏的字段属性
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //指定数据表，也可以不用指定，默认为文件名同名+s的数据表
    protected $table = 'users';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user){
            $user->activation_token = str_random(30);
        });
    }
}
