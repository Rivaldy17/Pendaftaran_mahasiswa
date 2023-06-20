<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Studi_model extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'studi';
    protected $primaryKey = 'id_studi';

    protected $fillable = ['jurusan'];
}