<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = ['heading', 'content','mission_desc','solide_desc','mot_president','desc_mot_president','nom_mot_president','poste_mot_president','photo_mot_president','video_mot_president', 'image', 'video', 'address', 'phone', 'email', 'open_time', 'close_time', 'facebook', 'instagram', 'linkedin', 'twitter', 'youtube','catalogue'];
}