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
                        <label for="">Content</label>
                        <textarea name="content" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-control" name="category">
                        <option>Select Category</option>
                            <?php 
                                $query = mysqli_query($con,"select * from category");
                                while($row = mysqli_fetch_array($query)){?>
                                <option value="<?=$row['cat_id'];?>"><?=$row['title'];?></option>
                            <?php } ;?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-control" name="author">
                        <option>Select Author</option>
                            <?php 
                                $query = mysqli_query($con,"select * from user");
                                while($row = mysqli_fetch_array($query)){?>
                                <option value="<?=$row['user_id'];?>"><?=$row['name'];?></option>
                            <?php } ;?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="news_send" class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['news_send'])){
    $content = $_POST['content'];
    $author = $_POST['author'];
    $category = $_POST['category'];


    $query = mysqli_query($con,
    "INSERT INTO post(content,author,category)values('$content','$author','$category')");
    if($query){
        header("Location: index.php");

    }

}

?>

