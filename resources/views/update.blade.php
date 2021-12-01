<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Student Management | Add</h2>
  <br>
  <form action = "/updateUser" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">Full Name:</label>
    <input type="text" class="form-control" value="{{Session::get('user')->fullName }}" name="fullName">
    <label>Username:</label>
    <input type="text" class="form-control" value="{{Session::get('user')->username }}" name="username">
    <label>Email:</label>
    <input type="text" class="form-control" value="{{Session::get('user')->email }}" name="email"><br>
    <label>Password:</label>
    <input type="password" class = "form-control" placeholder=" Actual Password" name="actualPassword"><br>
    <input type="password" class="form-control" placeholder="New Password" name = "NewPasssword"><br>
    <button type="submit"  value = "Update student" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>