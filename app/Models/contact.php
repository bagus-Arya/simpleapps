<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Passport\HasApiTokens;

class contact extends Model
{
    use Notifiable,HasApiTokens;
    protected $fillable = [
        'user_id', 'nick_name', 'fullname', 'birthdate', 'gender', 'address', 'email',
    ];
    public function user(){
        return $this->belongsTo(user::class);
    }
}
