<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default_styles.css">
</head>

<body>

  <div class="order-heading">
    <h1>Orders</h1>
  </div>

  <div class="container">


    <div class="order">
      <form action="">

        <label for="order">Order</label>
        <input type="text" value="">

        <label for="customer">Select a customer:</label>
        <input list="customer" type="text">
        <datalist id="customer">
          <option value="null" selected>None</option>

          <?php
          include("./connect.php");
          error_reporting(0);
          $query = "SELECT * FROM customer";
          $data = mysqli_query($connect, $query);
          $total = mysqli_num_rows($data);

          if ($total != 0) {
            while ($result = mysqli_fetch_assoc($data)) {
              echo
              "
              <option value='$result[Customer_ID]'>" . $result['Customer_Name'] . " | Address: "  . $result['Location'] . " | ID: " .  $result['Customer_ID'] .   "</option>
              ";
            }
          } else {
            echo "No records found";
          }
          ?>
        </datalist>

        <label for="product">Product ID</label>
        <input list="product" type="text">
        <datalist id="product">
          <option value="null" selected>None</option>

          <?php
          include("./connect.php");
          error_reporting(0);
          $query = "SELECT * FROM products";
          $data = mysqli_query($connect, $query);
          $total = mysqli_num_rows($data);

          if ($total != 0) {
            while ($result = mysqli_fetch_assoc($data)) {
              echo
              "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
            }
          } else {
            echo "No records found";
          }
          ?>
        </datalist>

        <label for="product">Quantity</label>
        <input type="text">

        <input type="submit">

      </form>
    </div>

  </div>



</body>

</html>