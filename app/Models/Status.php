<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{   //指定可以正常更新的字段
    protected $fillale = ['content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function feed()
    {
        return $this->statuses()
                    ->orderBy('create_at','desc');
    }
}
