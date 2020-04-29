<?php
$sent=$_GET['q'];

//$sent = preg_replace("/[^a-zA-Z]/", "", $sent);

#first file
$data1=file_get_contents('database/t1.txt');

$arr=explode($sent,$data1);
if(count($arr)>1)
{
  $arr2=$arr[0];
  $arr3=explode(":",$arr2);
  $lastcontain=$arr3[count($arr3)-2];
  $lastcontain = preg_replace("/[^a-zA-Z]/", "", $lastcontain);
  echo $lastcontain;


}else{
  #second file
  $data2=file_get_contents('database/t2.txt');

  $arr=explode($sent,$data2);
  if(count($arr)>1)
  {
    $arr2=$arr[0];
    $arr3=explode(":",$arr2);
    $lastcontain=$arr3[count($arr3)-2];
    $lastcontain = preg_replace("/[^a-zA-Z]/", "", $lastcontain);
    
    echo $lastcontain;
  }
}

?>
