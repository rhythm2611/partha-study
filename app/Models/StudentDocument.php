<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class StudentDocument extends Model
{
    use HasFactory;
    protected $table = 'student_documents';
    protected $primaryKey = 'id';
    protected $fillable =['student_id','s_document','s_file'];

    public function student_document()
    {
    return $this->belongsTo(Student::class,'student_id');
    }

}
