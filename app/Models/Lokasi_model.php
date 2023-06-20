<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Lokasi_model extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'lokasi';
    protected $primaryKey = 'id_lokasi';

    protected $fillable = ['kota','provinsi'];
}