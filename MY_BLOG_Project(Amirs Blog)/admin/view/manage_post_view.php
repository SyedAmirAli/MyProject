<?php

    
$posts = $obj->display_pots();

    if(isset($_GET['status'])){
        if($_GET['status'] == 'deletepost'){
            $delid = $_GET['id'];
            $del_msg = $obj->delete_post($delid);
        }
    }


?>

<!--  -->


<h1>Manage Post View:</h1>
<?php if(isset($del_msg)){ echo $del_msg; } ?>

<!-- <div class="table-responsive"> --><div>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Thumb</th>
            <th>Tag</th>
            <th>Author</th>
            <th>Date</th>
            <th>Catagory</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($postdata = mysqli_fetch_assoc($posts)){ ?>
            <tr>
                <td><?php echo $postdata['post_id']; ?></td>
                <td><?php echo $postdata['post_title']; ?></td>
                <td><?php echo $postdata['post_content']; ?></td>
                <td>
                    <img width="100px" height="100px" src="../picture/<?php echo $postdata['post_img']; ?>" alt=""><br>

                    <button class="btn btn-success btn-sm">
                    <a href="edit_img.php?status=editimg&&id=<?php echo $postdata['post_id']; ?>">Change</a>
                    </button>
                </td>
                <td><?php echo $postdata['post_tag']; ?></td>
                <td><?php echo $postdata['post_author']; ?></td>
                <td><?php echo $postdata['post_date']; ?></td>
                <td><?php echo $postdata['cat_name']; ?></td>
                <td>
                    <?php
                        if($postdata['post_status'] == 1){
                            echo "Published";
                        }else{
                            echo "Unpublished";
                        } 
                    ?>
                    <br>
                    <button class="btn btn-success btn-sm">
                    <a href="edit_status.php?status=editststus&&id=<?php echo $postdata['post_id']; ?>">Change</a>
                    </button>
                </td>
                <td>
                    <a href="edit_post.php?status=editopost&&id=<?php echo $postdata['post_id']; ?>" class="btn btn btn-warning">Edit</a>
                    <a href="?status=deletepost&&id=<?php echo $postdata['post_id']; ?>" class="btn btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>
</div>
