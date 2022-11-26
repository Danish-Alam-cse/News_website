<?php
    include_once("config.php");
    include_once("navbar.php");

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <form action="" method="POST" class="p-4">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="user_send" class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['user_send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = mysqli_query($con,
    "INSERT INTO user(name,email,password)values('$name','$email','$password')");
    if($query){
        echo "insert ho gya";
    }

}

?>

