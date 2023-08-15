<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Activity extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $primaryKey = 'activity_id';

    // public function activities()
    // {
    //     return $this->belongsToMany(Activity::class,'student_activities','id','s_id');
    // } 
    
}