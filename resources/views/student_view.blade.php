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
        @endforeach
      </tr>
    @endforeach
  </table>
</body>
</html>