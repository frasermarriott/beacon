<?php

namespace beacon;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use YoHang88\LetterAvatar\LetterAvatar;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'first_name', 'surname' 'email', 'password',
    // ];
    protected $fillable = [
        'first_name', 'surname', 'email', 'password', 'linked_to_family', 'contrast_settings', 'font_settings', 'profile_img',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAvatarAttribute()
    {
        $fullname = $this->first_name . ' ' . $this->surname;
        return new LetterAvatar($fullname);
    }
}
