<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ATC extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'atccodes';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'atc_code',
        'atc_content',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
//        'email_verified_at' => 'datetime',
    ];
}
