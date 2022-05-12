<?php
// search data from table Business

$server = 'localhost';
$user = 'root';
$pass = '123456789*';
$mydb = 'business';
$table_name = 'biz_categories';

$connect = mysqli_connect($server, $user, $pass, $mydb);
if (!$connect) {
    die("Cannot connect to $server using $user");
}
// query
// $sql = "Select * From businesses";
$sql = "SELECT businesses.BusinessID as 'BusinessID', businesses.Name as 'Name',businesses.Address as 'Address', businesses.City as 'City', businesses.Telephone as 'Telephone', businesses.URL as 'URL' from businesses, biz_categories, categories where businesses.BusinessID= biz_categories.BusinessID and categories.CategoryID= biz_categories.CategoryID and categories.Title ='A'";

$result = mysqli_query($connect, $sql);

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($data);

$connect->close();
