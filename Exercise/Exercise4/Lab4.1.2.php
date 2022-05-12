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
    $SQLcmd = "INSERT INTO  $table_name(Product_desc, Weight,Cost,Numb) VALUES(" . "'" . $_POST['Product_desc'] . "'" . ", " . $_POST['Weight'] . ", " . $_POST['Cost'] . ", " . $_POST['Numb'] . ")";
    mysqli_select_db($connect, $mydb);
    if (mysqli_query($connect, $SQLcmd)) {
        print '<font size="4" color="blue" >Created Table';
        print "<i>$table_name</i> in database<i>$mydb</i><br></font>";
        print "<br>SQLcmd=$SQLcmd";
        print '<p>Insert into perl_pgm_com was successful!</p>';
    } else {
        die("Insert Failed SQLcmd=$SQLcmd");

    }
    mysqli_close($connect);
    // echo $SQLcmd;

}

?>
