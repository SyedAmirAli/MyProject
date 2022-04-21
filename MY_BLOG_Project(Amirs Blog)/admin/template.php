<?php 
    include("Class/function.php");
    $obj = new adminBlog();

    session_start();
    $id = $_SESSION['adninID'];
    if($id == null){
        header("location: index.php");
    }

    if(isset($_GET['adminlogout'])){
        if($_GET['adminlogout'] == 'logout'){
            $obj->adminLogout();
        }
    }


?>




<?php include_once("includes/head.php"); ?>
    <body class="sb-nav-fixed">
    <?php include_once("includes/topnav.php"); ?>
        <div id="layoutSidenav">
            <?php include_once("includes/sidenav.php"); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        
                                <!-- MAIN HEADER -->
                        <?php 
                                if(isset($view)){
                                    if($view == "dashboard"){
                                    include("view/dash_view.php");    
                                    }elseif($view == "add_catagory"){
                                        include("view/add_cat_view.php");
                                    }elseif($view == "manage_catagory"){
                                        include("view/manage_cat_view.php");
                                    }elseif($view == "add_post"){
                                        include("view/add_post_view.php");
                                    }elseif($view == "manage_post"){
                                        include("view/manage_post_view.php");
                                    }elseif($view == "edit_catagory"){
                                        include("view/edit_cat_view.php");
                                    }elseif($view == "edit_img"){
                                        include("view/edit_img_view.php");
                                    }elseif($view == "edit_post"){
                                        include("view/edit_post_view.php");
                                    }elseif($view == "edit_status"){
                                        include("view/edit_status_view.php");
                                    }elseif($view == "add_heading"){
                                        include("view/add_heading_view.php");
                                    }elseif($view == "manage_heading"){
                                        include("view/manage_heading_view.php");
                                    }elseif($view == "edit_banner"){
                                        include("view/edit_banner_view.php");
                                    }elseif($view == "edit_banner_img"){
                                        include("view/edit_banner_img_view.php");
                                    }elseif($view == "edit_banner_status"){
                                        include("view/edit_banner_status_view.php");
                                    }
                                }

                                // Next Session
                        ?>
                    </div>
                </main>
                <?php include_once("includes/footer.php"); ?>
            </div>
            <?php include_once("includes/script.php"); ?>
        </div>
    </body>
</html>
