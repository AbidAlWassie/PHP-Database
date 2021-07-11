<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html class="<?php echo $theme ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="img/package.png">
  <?php echo $table_styles ?>
  <!-- <link rel="stylesheet" href="css/table.css"> -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav.css">
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
  <!-- <link rel="stylesheet" href="css/simple-scrollbar.css">
  <script src="js/simple-scrollbar.js"></script> -->
  <script>
    const SimpleScrollbar = require("js/simple-scrollbar");
    require("css/simple-scrollbar.css");
  </script>
  <?php echo $form_styles ?>
  <?php echo $delete_styles ?>
  <!-- <link rel="stylesheet" href="css/form.css"> -->
  <!-- <link rel="stylesheet" href="fonts/stylesheet.css"> -->
  <title><?php echo $title ?></title>
</head>

<body>