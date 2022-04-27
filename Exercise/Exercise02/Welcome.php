<?php
echo 'Hello, ' .$_POST['name'];
echo '<br>';
echo 'You are studing at class: ' . $_POST['Class'];
echo '<br>';
echo 'Your hobby is:';
echo '<br>';
for($x=0; $x< count($_POST['hobby']); $x++){
  echo $x+1 . $_POST['hobby'][$x]."<br>";
}

?>