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
    @foreach($aadhaar_phones as $aadhaar_phone)
      <tr>
        <td>{{$aadhaar_phone->s_name}}</td>
        <td>{{$aadhaar_phone->s_email}}</td>
        <td>{{$aadhaar_phone->s_gender}}</td>
        <td>{{$aadhaar_phone->s_phone}}</td>
        <td>{{$aadhaar_phone->s_document}}</td>
      </tr>
    @endforeach
  </table>
  
</body>
</html>