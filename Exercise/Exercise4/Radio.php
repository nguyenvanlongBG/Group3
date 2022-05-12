 <?php
$server = "localhost";
$user = "root";
$pass = "123456789*";
$mydb = "products";
$table_name = 'Products_P';
$connect = mysqli_connect($server, $user, $pass);
if (!$connect) {
    die("Cannot connect to $server using $user");
} else {
    // echo $_POST['Product_desc'] . "  " . $_POST['Weight'] . "  " . $_POST['Cost'] . "  " . $_POST['Numb'];
    $SQLcmd = "Select * From " . $table_name;

    mysqli_select_db($connect, $mydb);
    if (mysqli_query($connect, $SQLcmd)) {
        print '<font size="4" color="blue" >Created Table';
        print "<i>$table_name</i> in database<i>$mydb</i><br></font>";
        print "<br>SQLcmd=$SQLcmd";
        print '<p>Insert into perl_pgm_com was successful!</p>';
    } else {
        die("Insert Failed SQLcmd=$SQLcmd");

    }

    // echo $SQLcmd;
    $data = mysqli_query($connect, $SQLcmd);
    mysqli_close($connect);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="Radio.php" method="post">
      <table>
        <tr>
         <h1>Select Product We Sold</h1>
        </tr>
        <tr>

          <?php
$i = 1;

while ($row = mysqli_fetch_array($data)) {
    echo $row['Cost'] . " <input type='radio' " . " name='Cost' value=" . "'" . $row['Cost'] . "'  >";

}
?>


        </tr>

      </table>
      <tr>
        <input type="submit" value="Click to submit" />
        <input type="reset" value="Reset" />
      </tr>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST['Cost']);
}

?>