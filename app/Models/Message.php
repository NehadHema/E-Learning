<?php

namespace App\Models;

use App\Mail\WelcomeMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Message extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $fillable = [ 'message','name', 'email', 'subject'];



}
