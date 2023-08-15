<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table>
    {{-- @foreach($aadhaars as $aadhaar)
      <tr>
        <td>{{$aadhaar->s_name}}</td>
        <td>{{$aadhaar->s_email}}</td>
        <td>{{$aadhaar->s_gender}}</td>
        <td>{{$aadhaar->s_document}}</td>
      </tr>
    @endforeach --}}
    @foreach($students as $student)
    @php($aadhar = $student->student_docs()->latest()->first()) {{--lzay loading--}}
      <tr>
        <td>{{$student->s_name}}</td>
        <td>{{$student->s_email}}</td>
        <td>{{$student->s_gender}}</td>
        <td>{{ $aadhar ? $aadhar->s_file : 'N/A' }}</td>
      </tr>
    @endforeach
  </table>
  
</body>
</html>