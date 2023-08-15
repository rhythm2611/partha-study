<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{url('/')}}/register" enctype="multipart/form-data" method="POST">
    @csrf
      <h4>Student Name</h4>
        <input type="text" name="sname" value=""/>
      <h4>Email</h4>
        <input type="text" name="semail" value=""/>
      <h4>Gender</h4>
        <input type="radio" id="male" name="sgender" value="male">
          <label for="male">Male</label><br>
        <input type="radio" id="female" name="sgender" value="female">
          <label for="female">Female</label><br><br>
      <h4>Address</h4>
        <input type="text" name="saddress" value=""/>
      <h4>Phone No</h4>
        <input type="text" name="sphone" value=""/> <br><br>  
      <label>Choose a Document</label>
        <select name="sdocument" id="document">
          <option value="aadhaar">Aadhaar Card</option>
          <option value="voter">Voter Id</option>
        </select>
        <label for="">File</label>
        <input type="file" name="sfile" id="">
        <br><br>    
      <input type="submit" value="Submit">
  </form>
</body>
</html>