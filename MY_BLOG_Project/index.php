<?php 

  include("./admin/Class/function.php");

  $obj = new adminBlog();

    $getcat = $obj->display_catagory();




?>

<?php include_once("includes/head.php"); ?>

<body>

  <?php include_once("includes/preloader.php"); ?>
  <?php include_once("includes/header.php"); ?>

  <!-- Page Content -->

  <?php include_once("includes/banner.php"); ?>
  <?php include_once("includes/cta.php"); ?>

  <section class="blog-posts">
    <div class="container">
      <div class="row">
        <?php include_once("includes/blogpost.php"); ?>
        <?php /* include_once("includes/sidebar.php"); */ ?>
      </div>
    </div>
  </section>

  <?php include_once("includes/footer.php"); ?>
  <?php include_once("includes/script.php"); ?>