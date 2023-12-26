<?php 
include("config.php");

if (isset($_POST["addproduct"])) {
    $pname = $_POST["pname"];
    $pprice = $_POST["pprice"];
    $pimage = $_FILES["pimage"]["name"];
    $tmp_name = $_FILES["pimage"]["tmp_name"];



    if (!empty($pname) && !empty($pprice) && !empty($pimage)) {
        $insert = "INSERT INTO `products` (`pid`, `pname`, `pprice`, `pimage`) VALUES (NULL, '$pname', '$pprice', '$pimage')";
        
        // Use prepared statements to prevent SQL injection
        $stmt = mysqli_prepare($connection, $insert);
        mysqli_stmt_execute($stmt);
        
        move_uploaded_file($tmp_name, 'upload/' . $pimage);

        // Check if the query was successful
        if ($stmt) {
            echo '<script>
                alert("Add product successful");
                window.location.href="addproduct.php";
                </script>';
        } else {
            echo "Error: " . mysqli_error($connection);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
}
