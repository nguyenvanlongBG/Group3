

<?php
$server = "localhost";
$user = "root";
$pass = "123456789*";
$mydb = "products";
$table_name = "Products_P";
$connect = mysqli_connect($server, $user, $pass);
if (!$connect) {
    echo "Cannot connect to $server using $user";
} else {
    $SQLcmd = "Select * from $table_name where (Product_desc='" . $_POST['productName'] . "')";
    mysqli_select_db($connect, $mydb);
    if (mysqli_query($connect, $SQLcmd)) {
        $data = mysqli_query($connect, $SQLcmd);

        print $SQLcmd;
    } else {
        echo "Select Fail";
        print $SQLcmd;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <table>
      <thead>
        <td>Num</td>
        <td>Product</td>
        <td>Cost</td>
        <td>Weight</td>
        <td>Count</td>
      </thead>
      <tbody>
        <?php
$i = 1;
while ($row = mysqli_fetch_array($data)) {

    ?>

    <tr>
    <td>
    <?php echo $i ?>
    </td>
    <td>
    <?php echo $row['Product_desc'] ?>
    </td>
    <td>
    <?php echo $row['Cost'] ?>
    </td>
    <td>
    <?php echo $row['Weight'] ?>
    </td>
    <td>
    <?php echo $row['Numb'] ?>
    </td>
    </tr>

    <?php

    $i++;
    ?>

    <?php
}
?>


      </tbody>
    </table>
  </body>
</html>
