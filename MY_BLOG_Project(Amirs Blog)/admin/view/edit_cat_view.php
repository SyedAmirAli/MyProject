<?php

    if(isset($_GET['status'])){
        if($_GET['status'] == 'editcatagory'){
            $id = $_GET['id'];
            $editcata = $obj->get_cat_data($id);
            
        }
    }

    if(isset($_POST['update_cat'])){
        $return_msg = $obj->update_catagory($_POST);
    }

?>




<h1>Edit Catagory Page</h1>
    <?php if(isset($return_msg)){ echo $return_msg; } ?>

<form action="" method="POST">
    <!-- chnage -->
    <div class="form-group">

        <input name="u_cat_id" value="<?php echo $editcata['cat_id']; ?>" type="hidden" />
    </div>
    <!-- change -->

    <div class="form-group">
    <label class="mb-1" for="inputEmailAddress">Catagory Name:</label>

        <input name="u_cat_name" value="<?php echo $editcata['cat_name']; ?>" class="form-control py-4" id="inputEmailAddress" type="text" />
    </div>
    <div class="form-group">
    <label class="mb-1" for="inputEmailAddress">Catagory Descripyion:</label>
        
        <input name="u_cat_des" class="form-control py-4" value="<?php echo $editcata['cat_des']; ?>" id="inputEmailAddress" type="text" />
    </div>

        <input type="submit" name="update_cat" value="Update Catagory" class="from-control btn btn-block btn-info">

</form>