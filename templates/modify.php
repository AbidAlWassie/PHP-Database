<nav class="navbar">
  <a class="back" href="stock.php"><span>«</span>Back</a>
  <!-- <form <?php echo $rl ?> method="POST"><button type="submit" name="submit" class="btnToggle">Theme</button></form>
  <a class="logout" <?php echo $logout ?> href="logout.php">Logout</a> -->
</nav>

<header>
  <h1>Update Product Details</h1>
</header>

<form action="" method="GET">
  <table id="table1" class="form-table <?php echo $theme ?>">

    <tr>
      <td class="label">Product ID</td>
      <td class="input"><input type="text" value="<?php echo "$id" ?>" name="id" placeholder="Product ID"></td>
    </tr>

    <tr>
      <td class="label">Brand</td>
      <td class="input"><input type="text" value="<?php echo "$brand" ?>" name="brand" placeholder="Brand"></td>
    </tr>

    <tr>
      <td class="label">Product Name</td>
      <td class="input"><input type="text" value="<?php echo "$product" ?>" name="product" placeholder="Product Name"></td>
    </tr>

    <tr>
      <td class="label">Color</td>
      <td class="input"><input type="text" value="<?php echo "$color" ?>" name="color" placeholder="Color"></td>
    </tr>

    <tr>
      <td class="label">Size</td>
      <td class="input"><input type="text" value="<?php echo "$size" ?>" name="size" placeholder="Size"></td>
    </tr>

    <tr>
      <td class="label">Price</td>
      <td class="input"><input type="text" value="<?php echo "$price" ?>" name="price" placeholder="Price"></td>
    </tr>

    <tr>
      <td class="label">Quantity</td>
      <td class="input"><input type="text" value="<?php echo "$quantity" ?>" name="quantity" placeholder="Quantity"></td>
    </tr>



    <tr>
      <td colspan="2"><a class="btnSubmit" href="stock.php"><input id="btnSubmit" type="submit" name="submit"></a></td>
    </tr>

  </table>
</form>
</body>

</html>