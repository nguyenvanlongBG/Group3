
<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
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
        <form action="Lab4.4.php" method="post" >
        <table>
            <tr>
                <h1>Business Registration</h1>
            </tr>
<tr>
<td>
<p>
    Click on one, or control click on multiple
    categories
</p>
 <select name='categories_s[]' id='categories_s' multiple>
<?php

    $server = "localhost";
    $user = "root";
    $pass = "123456789*";
    $mydb = "business";
    $table_name = 'categories';
    $connect = mysqli_connect($server, $user, $pass);
    if (!$connect) {
        die("Cannot connect to $server using $user");
    } else {
        // echo $_POST['Product_desc'] . "  " . $_POST['Weight'] . "  " . $_POST['Cost'] . "  " . $_POST['Numb'];
        $SQLcmd = "Select * From " . $table_name;
        mysqli_select_db($connect, $mydb);
        $categories = [];
        if (mysqli_query($connect, $SQLcmd)) {

            print "<br>SQLcmd=$SQLcmd";
            // print '<p>Insert into perl_pgm_com was successful!</p>';
        } else {

            die("Select Failed SQLcmd=$SQLcmd");

        }
        $categories = mysqli_query($connect, $SQLcmd);
        $row = mysqli_fetch_all($categories, MYSQLI_ASSOC);

        mysqli_close($connect);
        // echo $SQLcmd;

    }

    foreach ($row as $category) {
        echo "<option value='" . $category['Title'] . "'>" . $category['Title'] . "</option>";

    }
    ?>
</select>
</td>
<td>

            <table>
              <tr>
                <td>Business Name</td>
                <td>
                  <input type="text" name="Name" />
                </td>
              </tr>

              <tr>
                <td>Address</td>
                <td>
                  <input type="text" name="Address" />
                </td>
              </tr>
              <tr>
                <td>City</td>
                <td>
                  <input type="text" name="City" />
                </td>
              </tr>
              <tr>
                <td>Telephone</td>
                <td>
                  <input type="text" name="Telephone" />
                </td>
              </tr>
              <tr>
                <td>URL</td>
                <td>
                  <input type="text" name="URL" />
                </td>
              </tr>
              <tr>
                  <input type="submit" value="Submit"/>
              </tr>

            </table>


</td>
</tr>
</table>
 </form>
    </body>
    </html>
    <?php
} else {
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
        <form>

        <table>
            <tr>
                <h1>Business Registration</h1>
            </tr>
            <tr>
                <td>
<p>
   Record inserted as shown below
</p>
</br>
</br>
<p>
    Selected category values are highlighted
</p>


<select name="categories_s[]" id="categories_s" multiple>
  <?php

    $server = "localhost";
    $user = "root";
    $pass = "123456789*";
    $mydb = "business";
    $table_name = 'categories';
    $connect = mysqli_connect($server, $user, $pass);
    if (!$connect) {
        die("Cannot connect to $server using $user");
    } else {
        // echo $_POST['Product_desc'] . "  " . $_POST['Weight'] . "  " . $_POST['Cost'] . "  " . $_POST['Numb'];
        $SQLcmd = "Select * From " . $table_name;
        mysqli_select_db($connect, $mydb);
        $categories = [];
        if (mysqli_query($connect, $SQLcmd)) {

            print "<br>SQLcmd=$SQLcmd";
            // print '<p>Insert into perl_pgm_com was successful!</p>';
        } else {

            die("Select Failed SQLcmd=$SQLcmd");

        }

        // echo $SQLcmd;

    }

    $categories = mysqli_query($connect, $SQLcmd);
    $rows = mysqli_fetch_all($categories, MYSQLI_ASSOC);
    mysqli_close($connect);

    foreach ($rows as $cate) {

        foreach ($_POST['categories_s'] as $categoryChoice) {
            if ($cate['Title'] == $categoryChoice) {
                echo "<option value='" . $cate['Title'] . "' style='background-color: blue'>" . $cate['Title'] . "</option>";
                // echo "<option value='" . $category['Title'] . "'>" . $category['Title'] . "</option>";

                echo $category['Title'];
            } else {
                echo "<option value='" . $cate['Title'] . "'>" . $cate['Title'] . "</option>";
                // echo $category['Title'];

            }
        }

    }

    ?>
    </select>

                </td>
                <td>
<table>
              <tr>
                <td>Business Name</td>
                <td>
                  <input type="text" name="Name"
                  value='<?php echo $_POST['Name'] ?>';

                  />


                </td>
              </tr>

              <tr>
                <td>Address</td>
                <td>

                  <input type="text" name="Address"
                  value='<?php echo $_POST['Address'] ?>'
                  />


                </td>
              </tr>
              <tr>
                <td>City</td>
                <td>
                  <input type="text" name="City"
                  value= '<?php echo $_POST['City'] ?>'/>
                </td>


              </tr>
              <tr>
                <td>Telephone</td>
                <td>
                  <input type="text" name="Telephone"
                  value='<?php echo $_POST['Telephone'] ?>'
                  />


                </td>
              </tr>
              <tr>
                <td>URL</td>
                <td>
                  <input type="text" name="URL"
                  value='<?php echo $_POST['URL'] ?>'
                  />


                </td>
              </tr>
              <tr>
                  <input type="submit" value="Submit"/>
              </tr>

            </table>
                </td>
            </tr>
        </table>
        </form>
    </body>
    </html>
    <?php
}

?>
