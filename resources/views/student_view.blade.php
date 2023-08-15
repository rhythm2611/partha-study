<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Student Data</h2>
  <table>
    @foreach($students as $student)
      <tr>
        <td>{{$student->s_name}}</td>
        <td>{{$student->s_email}}</td>
        <td>{{$student->s_gender}}</td>
          @foreach($student->student_infos as $student_info)
            <td>{{$student_info->s_address}}</td>
            <td>{{$student_info->s_phone}}</td> <!-- lazy loading -->
            @foreach($student->student_docs as $student_doc)
              <td>{{$student_doc->s_document}}</td>
              <td>
                @if($student_doc->s_file)
                <img src="{{ asset('storage/'.$student_doc->s_file) }}" width="50" height="50">
                @endif
              </td>
            @endforeach
          @endforeach
      </tr>
    @endforeach
  </table><br>
  <a href="{{url('/aadhaar')}}">Student with Aadhaar Card</a><br><br>
  <a href="{{url('/aadhaar_phone')}}">Student with Aadhaar Card & Phone No</a>
</body>
</html>