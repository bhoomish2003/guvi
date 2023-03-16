
  <?php
    session_start();
    $username="";
    $email="";
    $errors=array();

    $db = mysqli_connect('localhost','root','','guvi') or die("could not cannot to database");
    print_r(array_keys($_POST));

    $username=mysqli_real_escape_string($db,$_POST['uname']); 
    $email=mysqli_real_escape_String($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password_con=mysqli_real_escape_String($db,$_POST['password_con']);
    
    if(empty($username)){array_push($errors, "Username is required");}
    if(empty($email)){array_push($errors, "Email is required");}
    if(empty($password)){array_push($errors, "Password is required");}
    if(empty($password_con)){array_push($errors, "Confirm Password is required");}
    if($password != $password_con){array_push($errors,"Pasword is not same to confirm");}

    $user_check="SELECT * FROM user Where username='$username' or email='$email' LIMIT 1";
    $res=mysqli_query($db,$user_check);
    $user=mysqli_fetch_assoc($res);
      if($user){
          if($user['username']===$username){array_push($errors,"Username already exists");
            echo "already exist username";
          }
          if($user['email']===$email){array_push($errors,"Email id is Already exist in other username");}
      }
      if(count($errors)==0){
          $password=md5($password);
          $query="INSERT INTO user(username,email,password) Values ('$username','$email','$password')"; 
          mysqli_query($db,$query);
          echo "Success";
          $_SESSION['username']=$username;
          $_SESSION['success']="You are now logged in";

          header('location:register.html');
      }
?>

