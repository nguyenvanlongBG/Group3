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
		<h1>Manager Câu hỏi của đề <?php echo $data['Ten_De'] ?> </h1>
		<!-- <p><a href="#" ><i class="fa fa-plus-square"></i>Add Vehicle</a></p> -->
    <table id="test-table">
      <thead>
        <tr>
          <th>ID Câu hỏi</th>
          <th>Độ khó</th>
          <th>Nội dung</th>
          <th>Đáp án A</th>
          <th>Đáp án B</th>
          <th>Đáp án C</th>
          <th>Đáp án D</th>
          <th>Đáp án</th>

        </tr>
      </thead>
      <tfoot></tfoot>
      <tbody>

<?php
foreach ($data['listCauHoi'] as $ch) {
    if (!(array_key_exists('idCauHoi', $data) && $data['idCauHoi'] == $ch['ID_Cau_hoi'])) {
        echo
            '<tr>
             <td>' . $ch['ID_Cau_hoi'] . '</td>
             <td>' . $ch['Do_kho'] . '</td>
             <td>' . $ch['Noi_dung'] . '</td>
             <td>' . $ch['Dap_an_A'] . '</td>
             <td>' . $ch['Dap_an_B'] . '</td>
             <td>' . $ch['Dap_an_C'] . '</td>
             <td>' . $ch['Dap_an_D'] . '</td>
             <td>' . $ch['Dap_an'] . '</td>
             <td>
                  <form action="/MVC3/updateCauHoi" method="post" class="form_icon">
                        <input type="hidden" name="idCauHoi" value="' . $ch['ID_Cau_hoi'] . '" ></input>
                        <input type="hidden" name="idDeThi" value="' . $ch['ID_De'] . '" ></input>
						            <button class="button" type="submit"> <i class="fa fa-pencil-square-o"> </i></button>
                  </form>


                  <form action="/MVC3/deleteCauHoi" method="post" class="form_icon">
                        <input type="hidden" name="idCauHoi" value="' . $ch['ID_Cau_hoi'] . '" ></input>
                        <input type="hidden" name="idDeThi" value="' . $ch['ID_De'] . '" ></input>
                        <button class="button" type="submit"><i class="fa fa-trash-o"></i></button>

                  </form>

					</td>
        </tr>';
    } else {
        echo
            ' <tr>
              <form action="/MVC3/updatedCauHoi" method="post">
                  <td><label for=""><input type="text" name="ID_Cau_hoi" id="" value="' . $ch['ID_Cau_hoi'] . '"  disabled  /></label></td>
                  <td><label for=""><input type="text" name="Do_kho" id="" value="' . $ch['Do_kho'] . '" /></label></td>
                  <td><label for=""><input type="text" name="Noi_dung" id="" value="' . $ch['Noi_dung'] . '" /></label></td>
                  <td><label for=""><input type="text" name="Dap_an_A" id="" value="' . $ch['Dap_an_A'] . '" /></label></td>
                  <td><label for=""><input type="text" name="Dap_an_B" id="" value="' . $ch['Dap_an_B'] . '" /></label></td>
                  <td><label for=""><input type="text" name="Dap_an_C" id="" value="' . $ch['Dap_an_C'] . '" /></label></td>
                  <td><label for=""><input type="text" name="Dap_an_D" id="" value="' . $ch['Dap_an_D'] . '" /></label></td>
                  <td><label for=""><input type="text" name="Dap_an" id="" value="' . $ch['Dap_an'] . '" /></label></td>
                  <td>
                         <input type="hidden" name="idCauHoi" value="' . $ch['ID_Cau_hoi'] . '" ></input>
                          <input type="hidden" name="idDeThi" value="' . $ch['ID_De'] . '" ></input>
                          <input type="submit" class="tiny button" value="Update"/>
               </form>
            </tr> ';

    }
}
?>
<tr>
  <form action="/MVC3/addCauHoi" method="post">
     <input type="hidden" name="ID_De" value= <?php echo $data['ID_De'] ?>  ></input>
          <td><label for=""><input type="text" name="ID_Cau_hoi" id="" placeholder="ID Câu hỏi"  /></label></td>
          <td><label for=""><input type="text" name="Do_kho" id="" placeholder="Độ khó" /></label></td>
          <td><label for=""><textarea type="text" name="Noi_dung" id="" placeholder="Nội dung"></textarea></label></td>
          <td><label for=""><input type="text" name="Dap_an_A" id="" placeholder="A" /></label></td>
          <td><label for=""><input type="text" name="Dap_an_B" id="" placeholder="B" /></label></td>
          <td><label for=""><input type="text" name="Dap_an_C" id="" placeholder="C" /></label></td>
          <td><label for=""><input type="text" name="Dap_an_D" id="" placeholder="D" /></label></td>
          <td><label for=""><input type="text" name="Dap_an" id="" placeholder="Đáp án" /></label></td>

          <td>

						  <input type="submit" value="Add" class="tiny button" />

					</td>
          </form>
        </tr>







      </tbody>
    </table>

  </div>
</div>

</body>
</html>
