
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

    $SQLcmd = "Update $table_name as p set p.Numb=p.Numb-1 where (Product_desc=" . "'" . $_POST['productName'][0] . "'" . ")";

    mysqli_select_db($connect, $mydb);
    if (mysqli_query($connect, $SQLcmd)) {
        require_once './Lab4.1.3.php';

        print $SQLcmd;
    } else {
        echo "Select Fail";
        print $SQLcmd;
    }

}
?>