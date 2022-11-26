<?php
    $con = mysqli_connect("localhost","root","","news");
    if($con){
        echo "ho gya", "<br/>";
    }


//     $query = mysqli_query($con,"select * from category");

//     while($row = mysqli_fetch_array($query)){
//         echo $row['cat_id'] , "<br/>";
//         echo $row['title'] , "<br/>";
//         echo $row['description'] , "<br/>";
//     }

    
//     $user = mysqli_query($con,"select * from user");

//     while($r = mysqli_fetch_array($user)){
//         echo $r['user_id'] , "<br/>";
//         echo $r['name'] , "<br/>";
//         echo $r['email'] , "<br/>";
//         echo $r['password'] , "<br/>";

//     }



//     $post = mysqli_query($con,"select * from post INNER JOIN category ON post.category = category.cat_id
//     JOIN user
//   ON post.author = user.user_id;");
//     while($p = mysqli_fetch_array($post)){
//         echo $p['post_id'] , "<br/>";
//         echo $p['content'] , "<br/>";
//         echo $p['title'] , "<br/>";
//         echo $p['name'] , "<br/>";

//     }
?>