<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Contact_model extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'contact';
    protected $primaryKey = 'id_contact';

    protected $fillable = ['nama_c','email_c','role','subject','message','status'];
}