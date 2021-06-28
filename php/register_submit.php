<?php
    include 'config.php';
    
    if( isset($_POST['continue']) && $_POST["firstname"] != ''&& $_POST["lastname"] != '' && $_POST["email"] != '' && $_POST["telephone"] != '' && $_POST["yourpassword"] != '' && $_POST["confirdyourpassword"] != '' && $_POST["city"] != '' && $_POST["country"] != '' ){
        //thực hiện xử lý khi người dùng nhấn nút Continute và điền đầy đủ thông tin
       
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $yourpassword = $_POST["yourpassword"];
        $confirdyourpassword = $_POST["confirdyourpassword"];
        $city = $_POST["city"];
        $country = $_POST["country"];
        if( $yourpassword != $confirdyourpassword ){
            header("location:register.php");
        }
        $sql1 = "SELECT * FROM user WHERE email='$email' ";
        $old = mysqli_query($conn,$sql1);
        if(mysqli_num_rows($old)> 0) {
            header("location:register.php");
        }
        $sql = " INSERT INTO user (firstname, lastname, email, telephone, yourpassword, confirdyourpassword, city, country) VALUES ('$firstname','$lastname','$email','$telephone','$yourpassword','$confirdyourpassword','$city','$country') ";
        mysqli_query($conn , $sql);
        echo "Đã đăng ký thành công";
        header("location:login.php");
    } else{
        header("location:register.php");
    }
?>