<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class StudentInformation extends Model
{
    use HasFactory;
    protected $table = 'student_informations';
    protected $primaryKey = 'id';
    protected $fillable =['student_id','s_address','s_phone'];

    public function student_information()
    {
    return $this->belongsTo(Student::class,'student_id');
    }

}
