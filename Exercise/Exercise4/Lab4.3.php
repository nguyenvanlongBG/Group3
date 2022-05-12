<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $server = 'localhost';
    $user = 'root';
    $pass = '123456789*';
    $mydb = 'business';
    $table_name = 'categories';
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        die("Cannot connect to $server using $user");
    }

    $sql = "Insert into Categories values('" . $_POST['CategoryID'] . "','" . $_POST['Title'] . "','" . $_POST['Description'] . "') ";
    mysqli_query($connect, $sql);
    $connect->close();
}

?>
<?php
$server = 'localhost';
$user = 'root';
$pass = '123456789*';
$mydb = 'business';
$table_name = 'categories';
$connect = mysqli_connect($server, $user, $pass, $mydb);
if (!$connect) {
    die("Cannot connect to $server using $user");
}
$sql = "Select * from $table_name";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
$connect->close();
?>

<html>
  <head>
    <title>Categorys</title>
  </head>
<body>
  <h1>Category Administration</h1>
  <table>
    <tr>
      <th style="width: 60px">Cat ID</th>
      <th style="padding: 0 5px; width: 250px">Title</th>
      <th style="padding: 0 5px; width: 250px">Description</th>
    </tr>
    <tr>
      <?php foreach ($row as $category) {?>
        <tr>
        <th ><?php echo $category['CategoryID'] ?></th>
        <th ><?php echo $category['Title'] ?></th>
        <th ><?php echo $category['Description'] ?></th>
        </tr>
      <?php }?>
    </tr>
  </table>
  <form action="Check2.php" method='POST'>
    <div>
        <input type="text" style="width: 60px" name='CategoryID'>
        <input type="text" style="width: 250px" name='Title'>
        <input type="text" style="width: 250px" name='Description'>
      </div>
      <input type="submit" name="submit">
  </form>
  </body>
  </html>
