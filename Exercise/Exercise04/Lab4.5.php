
<?php
// search data from table Business
function SearchData($Title)
{
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
    $sql = "SELECT businesses.BusinessID, businesses.Name,businesses.Address, businesses.City, businesses.Telephone, businesses.URL from businesses, biz_categories, categories where businesses.BusinessID= biz_categories.BusinessID and categories.CategoryID= biz_categories.CategoryID and categories.Title ='$Title'";

    $result = mysqli_query($connect, $sql);
    print_r(result);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $connect->close();

}

?>
<?php
//Connect to databae
$server = 'localhost';
$user = 'root';
$pass = '123456789*';
$mydb = 'business';
$table_name = 'categories';
$connect = mysqli_connect($server, $user, $pass, $mydb);
if (!$connect) {
    die("Cannot connect to $server using $user");
}
// Get data from category
$sql = "Select Title from $table_name";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
global $data;
$data = array();
$connect->close();
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
    <h1>Business Listings</h1>
    <div style="display: plex;">
        <div>
            <table>
                <tr>
                    <th>Click on a category to find business listings</th>
                </tr>
                <tr>
                     <?php foreach ($row as $category) {?>
                         <tr>
                           <th style="cursor: pointer;text-decoration: underline;" onclick="SearchData($category['Title'])" ><?php echo $category['Title'] ?></th>
                          </tr>
                     <?php }?>
                </tr>
            </table>
        </div>

        <div >
            <table>
                <tr>
                <?php foreach ($data as $Business) {?>
                         <tr>
                           <th  ><?php echo $Business['BusinessID'] ?></th>
                           <th  ><?php echo $Business['Name'] ?></th>
                           <th  ><?php echo $Business['Address'] ?></th>
                           <th  ><?php echo $Business['City'] ?></th>
                           <th  ><?php echo $Business['Telephone'] ?></th>
                           <th  ><?php echo $Business['URL'] ?></th>
                          </tr>
                     <?php }?>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>

