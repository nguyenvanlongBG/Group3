<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"   href="public/css/managerUser.css">
    <link rel="stylesheet"   href="https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css">
 <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">


    <link rel="stylesheet"   href="public/js/managerUser.js">
    <title>Document</title>
</head>
<body>
    <div class="row">
  <div class="large-12 columns">
		<h1>Manager Tài khoản</h1>
		<p><a href="#" ><i class="fa fa-plus-square"></i>Add Vehicle</a></p>
    <table id="test-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên</th>
          <th>Email</th>
          <th>Authorization</th>
          <th>Action</th>
					<th></th>
        </tr>
      </thead>
      <tfoot></tfoot>
      <tbody>
				<tr>
          <td><label for=""><input type="text" name="ID" id="" placeholder="ID" /></label></td>
          <td><label for=""><input type="text" name="Ten" id="" placeholder="Tên" /></label></td>
          <td><label for=""><input type="text" name="Email" id="" placeholder="Email" /></label></td>
          <td><label for=""><input type="text" name="Authorization" id="" placeholder="Authorization" /></label></td>

						<!-- <form action="searchUser" class="">
						  <div class="switch round large">
								<input id="exampleRadioSwitch3" type="radio" name="testGroup">
								<label for="exampleRadioSwitch3"></label>
								<input id="exampleRadioSwitch4" type="radio" name="testGroup">
								<label for="exampleRadioSwitch4"></label>
							</div>
						</form> -->
						<!--<i class="fa fa-check-circle"></i></td>-->
          <td>
						<form action="">
						  <input type="submit" class="tiny button" />
						</form>
					</td>
        </tr>


<?php
foreach ($data['listTai_khoan'] as $tk) {
    if (!(array_key_exists('idTaiKhoan', $data) && $data['idTaiKhoan'] == $tk['ID_Tai_khoan'])) {
        echo
            '<tr>
          <td>' . $tk['ID_Tai_khoan'] . '</td>
           <td>' . $tk['Ten'] . '</td>
          <td>' . $tk['Email'] . '</td>
          <td>' . $tk['authorization'] . '</td>
          <td>lorem4</td>
          <td>

              <form action="/MVC3/updateUser" method="post" class="form_icon">
                    <input type="hidden" name="idTaiKhoan" value="' . $tk['ID_Tai_khoan'] . '" ></input>
						        <button class="button" type="submit"> <i class="fa fa-pencil-square-o"> </i></button>
              </form>


              <form action="/MVC3/deleteUser" method="post" class="form_icon">
                        <input type="hidden" name="idTaiKhoan" value="' . $tk['ID_Tai_khoan'] . '"  ></input>
                        <button class="button" type="submit"><i class="fa fa-trash-o"></i></button>
              </form>

					</td>
        </tr>';} else {
        echo
            ' <tr>
              <form action="/MVC3/updatedUser" method="post">
                <td><label for=""><input type="text" name="ID_Tai_khoan" id="" value="' . $tk['ID_Tai_khoan'] . '" disabled  /></label></td>
                <td><label for=""><input type="text" name="Ten" id="" value="' . $tk['Ten'] . '" /></label></td>
                <td><label for=""><input type="text" name="Email" id="" value="' . $tk['Email'] . '" /></label></td>
                <td><label for=""><input type="text" name="authorization" value="' . $tk['authorization'] . '" /></label></td>
                <td><input type="hidden" name="idTaiKhoan" value="' . $tk['ID_Tai_khoan'] . '" ></input>
                <input type="submit" class="tiny button" value="Update"/>
              </form>
            </tr> ';

    }
}
?>







      </tbody>
    </table>
		<button class="tiny button right">Add Vehicle</button>
  </div>
</div>

</body>
</html>
