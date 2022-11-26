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
                        <label for="">Cat Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="cat_send" class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['cat_send'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = mysqli_query($con,
    "INSERT INTO category(title,description)values('$title','$description')");
    if($query){
        echo "insert ho gya";
    }

}

?>

