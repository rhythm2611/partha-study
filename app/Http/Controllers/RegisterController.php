<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentInformation;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {   
        //$request->only(['','','']);
        //$request->except(['','','']);
        //$request->all();
        $input = $request->only('sname','semail','sgender','saddress','sphone');

        $input['s_name'] = $input['sname'];
        $input['s_email'] = $input['semail'];
        $input['s_gender'] = $input['sgender'];

        $student = Student::create($input);

        $input2['s_address'] = $input['saddress'];
        $input2['s_phone'] = $input['sphone'];
        //$input2['student_id'] = $student->s_id;

        $result = $student->student_infos()->create($input2);
        
        //$studentInfo = StudentInformation::create($input2);
        //dd($student,$result);

        return redirect('/view');
    }

    public function view()
    {
        $students = Student::with('student_infos')->get(); // eager loading
        //dd($students);
        return view('student_view', compact('students'));
    }
}
