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
		<h1>Manager Đề thi</h1>

    <table id="test-table">
      <thead>
        <tr>
          <th>ID Đề</th>
          <th>Tên đề</th>
          <th>ID Chương</th>
          <th>Thời gian</th>
          <th>Action</th>
					<th></th>
        </tr>
      </thead>
      <tfoot></tfoot>
      <tbody>
				<tr>
          <td><label for=""><input type="text" name="ID_De" id="" placeholder="ID" /></label></td>
          <td><label for=""><input type="text" name="Ten" id="" placeholder="Tên" /></label></td>
          <td><label for=""><input type="text" name="ID_Chuong" id="" placeholder="ID_Chuong" /></label></td>
          <td><label for=""><input type="text" name="Thoi_gian" id="" placeholder="Thời gian" /></label></td>

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
foreach ($data['listDeThi'] as $dt) {

    echo
        '<tr>
          <td>' . $dt['ID_De'] . '</td>
           <td>' . $dt['Ten'] . '</td>
          <td>' . $dt['ID_Chuong'] . '</td>
          <td>' . $dt['Thoi_gian'] . '</td>
          <td>lorem5</td>
          <td>

              <form action="/MVC3/updateDeThi" method="post" class="form_icon">
                  <input type="hidden" name="idDeThi" value="' . $dt['ID_De'] . '" ></input>
                  <button class="button" type="submit"> <i class="fa fa-pencil-square-o"> </i></button>
              </form>

              <form action="/MVC3/deleteDeThi" method="post" class="form_icon">
                  <input type="hidden" name="idDeThi" value="' . $dt['ID_De'] . '" ></input>
                  <button class="button" type="submit"><i class="fa fa-trash-o"></i></button>
              </form>

              <form action="/MVC3/showBaiThi" method="post" class="form_icon" >
                  <input type="hidden" name="ID_De" value="' . $dt['ID_De'] . '" ></input>
                  <button class="button" type="submit"><i class="fa fa-book"></i></button>
              </form>
					</td>
        </tr>';
}
?>
<tr>
  <form action="/MVC3/addDeThi" method="post">
          <td><label for=""><input type="text" name="ID_De" id="" placeholder="ID"  /></label></td>
          <td><label for=""><input type="text" name="Ten" id="" placeholder="Tên" /></label></td>
          <td><label for=""><input type="text" name="ID_Chuong" id="" placeholder="ID_Chuong" /></label></td>
          <td><label for=""><input type="text" name="Thoi_gian" id="" placeholder="Thời gian" /></label></td>


          <td>

						  <input type="submit" value="Add" class="tiny button" />

					</td>
          </form>
        </tr>








      </tbody>
    </table>
<!-- <a href=">
		<button class="tiny button right" >Add Đề thi</button>
    </a> -->
  </div>
</div>

</body>
</html>
