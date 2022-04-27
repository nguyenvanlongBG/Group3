<?php
function check($month, $day,$year){
  $array=['1'=>31,'2'=>28,'3'=>31,'4'=>30,'5'=>31,'6'=>30,'7'=>31,'8'=>31,'9'=>30,'10'=>31,'11'=>30,'12'=>31];
  if( $year%4 == 0) $array['2']=29;
  if($array[$month]>=$day) return 1;
  else return 0;
}
$name= $_POST['name'];
$date=['date'=>$_POST['date'],'month'=>$_POST['month'],'year'=>$_POST['Year']];
$time=['hour'=>$_POST['hour'],'minute'=>$_POST['minute'],'second'=>$_POST['second']];
$check = $time['hour']%12;
$any='';
if($check=1) $any='PM';
else $any='AM';
$array=['1'=>31,'2'=>28,'3'=>31,'4'=>30,'5'=>31,'6'=>30,'7'=>31,'8'=>31,'9'=>30,'10'=>31,'11'=>30,'12'=>31];
echo 'Hi '.$name.'!';
echo '<br>';

if(check($date['month'],$date['date'],$date['year'])==1){
   echo 'You have choose to have an appointmenton '.$time['hour'].':'.$time['minute'].':'.$time['second']
             .', '.$date['date'].'/'.$date['month'].'/'.$date['year'];
             echo '<br>'.'More information'.'<br>';
echo 'In 12 hours, the time and date is '.$time['hour'].':'.$time['minute'].':'.$time['second'].' '.$any
             .', '.$date['date'].'/'.$date['month'].'/'.$date['year'].'<br>';

echo 'This month has '.$array[$date['month']].' days!';
}else {
  echo 'You have choose to have an appointmenton but it not exist';
}


?>