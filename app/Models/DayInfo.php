<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class DayInfo extends Model 
{
    use  HasFactory, Notifiable;

    protected $table = 'daycare';
    protected $primaryKey = 'id';
    protected $fillable = [
    'id_daycare',
    'name',
     'contact',
     'email',
     'address',
     'facilities',
     'rating',
     'verify',
     'img',
     'lisence',
     'landmark',
     ];
   

     public function review()
     {
         return $this->hasMany(Review::class, 'daycare_id')->latest(); // Add latest() to get the latest review first
     }
 
     public function firstReview()
     {
         return $this->review()->first();
     }
}


