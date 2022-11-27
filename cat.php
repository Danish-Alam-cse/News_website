<?php
    include_once("config.php");
    include_once("navbar.php");
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-lg-2">
            <div class="list-group">
                <?php 
                $query = mysqli_query($con,"select * from category");
                while($row = mysqli_fetch_array($query)){?>
                <a href="cat.php?cat=<?=$row['cat_id'];?>" class="list-group-item list-group-item-action"><?=$row['title'];?></a>
                <?php }?>
            </div>
        </div>
        <div class="col-lg-10">
        
            <div class="row">
            <?php 
                if(isset($_GET['cat'])):
                    $cat = $_GET['cat'];

                    $query = mysqli_query($con,"select * from post INNER JOIN category ON post.category = category.cat_id
                    JOIN user
                   ON post.author = user.user_id WHERE category = '$cat'");
                    $count = mysqli_num_rows($query);                         
                     while($row = mysqli_fetch_array($query)){?>
                <div class="col-lg-4 mb-2">
                    <div class="card shadow p-3">
                        <p class="card-title"><?= $row['content'];?></p>
                        <h4><span class="badge bg-success"><?= $row['name'];?></span>
                        <span class="badge bg-info"><?= $row['title'];?></span></h4>
                    </div>
                </div>
                <?php }
                endif;?>
            </div>
            
        </div>
    </div>
</div>