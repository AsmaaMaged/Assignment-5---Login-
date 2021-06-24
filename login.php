
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="Panel with panel-danger class">
                <div class="panel-heading">
                    <h1>Welcome back</h1>
                </div>
                <div class="panel-body">
                    <form action="index.php" method="POST">
                        <label for="email">Enter your Email:</label>
                        <input type="text" name="email" class="form-control">

                        <br>

                        <label for="password">Enter your password:</label>
                        <input type="password" name="password" class="form-control">

                        <br>

                        <input type="submit" class="btn btn-danger" value="Login!">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$name =  "";
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      echo "your email :  $email " ;
    }
  }


  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


</body>
</html>