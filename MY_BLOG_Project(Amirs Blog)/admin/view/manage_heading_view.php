
<?php 

    $banner = $obj->displayBanner();

    if(isset($_GET['del_status'])){
        if($_GET['del_status'] = 'del_banner'){
            $id = $_GET['id'];
            $delete_msg = $obj->delete_banner($id);
        }
    }

?>




<h2>Manage Banner:</h2>
<?php if(isset($delete_msg)){ echo $delete_msg; } ?>
<br>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Category</th>
                <th>Image-Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Cmnt-Count</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($banners=mysqli_fetch_assoc($banner)){ ?>
            <tr>
                <td><?php echo $banners['banner_id']; ?></td>
                <td>
                    <img height="100px" width="100px" src="banner_pic/<?php echo $banners['banner_img']; ?>" alt="">

                    <a href="edit_banner_img.php?BannerImgStatus=editbannerimg&&id=<?php echo $banners['banner_id']; ?>"><button class="btn btn-group-sm btn-warning"><i class="fa-solid fa-cash-register">Change</i></button></a>
                </td>
                <td><?php echo $banners['banner_ctg']; ?></td>
                <td><?php echo $banners['banner_titlte']; ?></td>
                <td><?php echo $banners['banner_author']; ?></td>
                <td><?php echo $banners['banner_date']; ?></td>
                <td><?php echo $banners['banner_cmnt']; ?></td>
                <td>

                    <?php
                        if($banners['banner_status'] == 1){
                            echo "Published";
                        }else{
                            echo "Unpublished";
                        } 
                    ?>

                    <a href="edit_banner_status.php?BannerStatus=editbannerimg&&id=<?php echo $banners['banner_id']; ?>"><button class="btn btn-group-sm btn-warning"><i class="fa-solid fa-cash-register">Change</i></button></a>
                </td>
                <td>
                    <a href="edit_banner.php?BannerEditStatus=editbanner&&id=<?php echo $banners['banner_id']; ?>">
                        <button class="btn btn-group-sm btn-warning">
                            Edit
                        </button>
                    </a>
                    
                    <a href="?del_status=del_banner&&id=<?php echo $banners['banner_id']; ?>">
                        <button class="btn btn-group-sm btn-danger">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
