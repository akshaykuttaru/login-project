<?php
    include("connection.php");
    if(isset($_POST['submit']))
    {
        $username = $_POST['user'];
        $password = $_POST['password'];


        $sql = "select * from login where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            header("location:welcome.php");
        }
        else
        {
            echo '<script>
            alert("Invalid Username or Password");
            window.location.href = "index.php";
            </script>';
        }

    }
    
?>
