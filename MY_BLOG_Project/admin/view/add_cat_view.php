<?php 
    if(isset($_POST['add_cat'])){
        $return_msg = $obj->add_catagory($_POST);
    }

?>





<h1>Add Catagory Page</h1>
    <?php if(isset($return_msg)){ echo $return_msg; } ?>

<form action="" method="POST">
    <div class="form-group">
        <label class="mb-1" for="inputEmailAddress">Catagory Name:</label>
        <input name="cat_name" class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Name of Catagory" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="inputEmailAddress">Catagory Descripyion:</label>
        <input name="cat_des" class="form-control py-4" id="inputEmailAddress" type="text" placeholder=" Descripyion of Catagory:" />
    </div>
    <input type="submit" name="add_cat" value="Add Catagory" class="from-control btn btn-block btn-primary">

</form>