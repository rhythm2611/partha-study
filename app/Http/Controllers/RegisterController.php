<?php
namespace App\Http\Controllers;

use App\Models\Activity;
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
        $input = $request->only('sname','semail','sgender','saddress','sphone','sdocument', 'sfile');
        //$request->file('sfile')->store('uploads');

        if($request->hasFile('sfile')){
            $path = $request->file('sfile')->store('uploads', 'public');
            $input['sfile'] = $path;
        }

        $input['s_name'] = $input['sname'];
        $input['s_email'] = $input['semail'];
        $input['s_gender'] = $input['sgender'];

        $student = Student::create($input);

        $input2['s_address'] = $input['saddress'];
        $input2['s_phone'] = $input['sphone'];
        //$input2['student_id'] = $student->s_id;

        $result = $student->student_infos()->create($input2);

        $input3['s_document'] = $input['sdocument'];
        $input3['s_file'] = $input['sfile'];

        $result1 = $student->student_docs()->create($input3);
               
        //$studentInfo = StudentInformation::create($input2);
        //dd($student,$result);

        return redirect('/view');
    }

    public function view()
    {
        $students = Student::with('student_infos')->get(); // eager loading
        $students = Student::with('student_docs')->get();
        //dd($students);
        return view('student_view', compact('students'));
    }

    public function show_aadhaar()
    {     

        // $aadhaars = DB::table('students')
   	 	// 				->join('student_documents', 'students.s_id', '=', 'student_documents.student_id')
    	// 				->where('student_documents.s_document', '=','aadhaar')
    	// 				->select('students.s_name', 'students.s_email', 'students.s_gender','student_documents.s_document')
    	// 				->get();  
        
        // $a = ['ajsdhj','kajsd','2'];
        // //array to collection
        // $b = collect($a);
        //dd($b);
        //\DB::connection()->enableQueryLog();
        $students = Student::whereHas('student_docs', function($query){
            $query->where('s_document', 'aadhaar');
         })->get();

        //  ->pluck('s_name','s_id')->toArray(); //collection

        // $s = Student::find(2);
        // dd($s);

        //dd(\DB::getQueryLog());

        //$s  = Student::has('student_docs', '>', '1')->get();

        //dd($s);

        //dd($students);

    	return view('aadhaar',compact('students'));


    	//return view('aadhaar')->with(['aadhaars'=> $aadhaars]);
           
    }

    public function show_aadhaar_phone()
    {     

        // $aadhaar_phones = DB::table('students')
        //                 ->join('student_documents', 'students.s_id', '=', 'student_documents.student_id')
   	 	// 				->join('student_informations', 'students.s_id', '=', 'student_informations.student_id')
    	// 				->where('student_documents.s_document', '=','aadhaar')
    	// 				->where('student_informations.s_phone','<>', '')
        //                 ->select('students.s_name', 'students.s_email', 'students.s_gender', 'student_informations.s_phone', 'student_documents.s_document')
    	// 				->get();   	

    	// return view('aadhaar_phone')->with(['aadhaar_phones'=> $aadhaar_phones]);
         $aadhaar_phones = 
                            Student::whereHas('student_docs', function($query){
                                $query->where('s_document', 'aadhaar');
                            })->whereHas('student_infos', function($query){
                                $query->where('s_phone', '<>', ''); 
                            }) ->get();
                        dd($aadhaar_phones);

         return view('aadhaar_phone', compact('aadhaar_phones'));           
    }

    public function add_activity()
    {
        $activity = new Activity();
        $activity->s_activity = 'Dancer';
        $activity->save();

        echo "Data Inserted Successfully !";

    }

    public function add_student()
    {
        $student = new Student();
        $student->s_name = 'Partha Mondal';
        $student->save();

        $activity_id = [1,2];
        $student->activities()->attach($activity_id);

        echo "Data Inserted Successfully !";

    }
}
