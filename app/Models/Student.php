<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'students';

    protected $fillable = [
        'student_code', 'name', 'password', 'picture', 'email', 'seminar_room', 'grade', 'resume', 'isAdmin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    //public $timestamps = false;

    public function getImageAttribute()
    {
        return $this->picture;
    }

    public function information(){
        return $this->belongsToMany('App\Models\Information','book','information_id','students_id');
    }


    //belongsToMany('宛モデル','pivotテーブル名','宛テーブル名の外部キー','自分の外部キー');
}