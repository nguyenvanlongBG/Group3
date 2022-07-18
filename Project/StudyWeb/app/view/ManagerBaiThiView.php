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
		<h1>Bài Thi của đề <?php echo $data['Ten_De'] ?></h1>

    <table id="test-table">
      <thead>
        <tr>
          <th>ID Bài Thi</th>
          <th>ID Tài Khoản</th>
          <th>Thời gian bắt đầu</th>
          <th>Thời gian kết thúc</th>
          <th>Điểm</th>
        </tr>
      </thead>
      <tfoot></tfoot>
      <tbody>

<?php
foreach ($data['listBaiThi'] as $bt) {

    echo
        '<tr>
             <td>' . $bt['ID_Bai_Thi'] . '</td>
             <td>' . $bt['ID_Tai_Khoan'] . '</td>
             <td>' . $bt['Bat_dau'] . '</td>
             <td>' . $bt['Ket_thuc'] . '</td>
             <td>' . $bt['Diem'] . '</td>

             <td>



                  <form action="/MVC3/deleteCauHoi" method="post" class="form_icon">
                        <input type="hidden" name="idCauHoi" value="' . $bt['ID_Bai_Thi'] . '" ></input>
                        <input type="hidden" name="idDeThi" value="' . $bt['ID_De'] . '" ></input>
                        <button class="button" type="submit"><i class="fa fa-trash-o"></i></button>

                  </form>

					</td>
        </tr>';

}
?>







      </tbody>
    </table>

  </div>
</div>

</body>
</html>
