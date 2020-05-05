<?php session_start();?>
<?php include('h.php');?>
<body>

  <div class="container">
    <?php include('navbar2.php');?>
    <img src="banner.png" class="img-fluid" alt="Responsive image">
    <?php include('navbar.php'); ?>

    <div class="row">
      <div class="col-md-2">
        <?php include('menu.php'); ?>
      </div>

      <div class="col-md-10">
      <?php include('show_product.php'); ?>

    </div>
    
    </div>

  </div>

    

</body>
</html>