<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Welcome to our website</h1>

</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-6">
      image here
      </div>
    <div class="col-sm-6">


        <form action="/mypage.php">
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname">
              </div>
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname">
              </div>
              
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
              <button type="submit" class="btn btn-default" name="signup">Submit</button>
            </form>
            <?php
            if (isset($_POST['signup'])) 
            {
                    
                    $fname= $_POST['fname'];
                    $lname= $_POST['lname'];
                    $email= $_POST['email'];
                    $pass= $_POST['pass'];
                    echo "Name:". $fname." ". $lname."<br>Email ID:".$email;        
                
            }
            ?>
            
            
    </div>
  </div>
</div>

</body>
</html>