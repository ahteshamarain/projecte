<?php
// print_r($_POST);
// foreach($_POST as $k =>$v) {
//     echo "$k = $v <br>";
// };

include("config.php");

if (isset($_POST['register'])){
    $fname = mysqli_real_escape_string($connection,$_POST["fname"]);
    $lname = mysqli_real_escape_string($connection,$_POST["lname"]);
    $email = mysqli_real_escape_string($connection,$_POST["email"]);
    $pass = mysqli_real_escape_string($connection,$_POST["pass"]);
    $rpass = mysqli_real_escape_string($connection,$_POST["rpass"]);
if($pass == $rpass){

    $spc = password_hash($pass, PASSWORD_BCRYPT);
    $email_check = "SELECT * from `employeedata` where `eemail` = '$email'";
    $res = mysqli_query($connection, $email_check);
    if($res){
        if(mysqli_num_rows($res)> 0){
        echo '<script>
alert("email already exist")
window.location.href="sign.php"
</script>';
    }
    else{

        $insert = "INSERT into `employeedata` (`eid`,`efname` , `elname` , `eemail` , `epass`) VALUES (NULL,'$fname' , '$lname' , '$email' , '$spc')";
   
        $result = mysqli_query($connection , $insert);
        if($result){
    echo '<script>
    alert("New employee added successful")
    window.location.href="index.php"
    </script>';
        }
    };
}
  
}else{
    echo '<script>
    alert("password does not match")
    window.location.href="sign.php"
    </script>';
}


}

?>