<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentInformation;
use App\Models\StudentDocument;
use App\Models\Activity;

class Student extends Model
{
    use HasFactory;
    //protected $table = 'students';
    protected $primaryKey = 's_id';
    protected $fillable =['s_name','s_email','s_gender'];
    //protected $guarded =['s_id'];

    public function student_infos()   
    {
    //return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    return $this->hasMany(StudentInformation::class,'student_id','s_id');
    }

    public function student_docs()   
    {
    //return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    return $this->hasMany(StudentDocument::class,'student_id','s_id');
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class,'student_activities', 's_id', 'activity_id');
    } 

}
