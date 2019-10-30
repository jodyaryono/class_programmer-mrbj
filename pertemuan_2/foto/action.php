<?php
define('IMAGEPATH', '');
//$data = array();
$data="";
foreach(glob(IMAGEPATH.'*.jpg') as $filename){
  //array_push($data,basename($filename));
  $data.='<div class="col-sm-3">
  <a href="'.basename($filename).'" target="_blank">
    <img src="'.basename($filename).'" alt="" class="img-responsive box">
    </a>
  </div>';
}
//echo json_encode($data);;
echo $data;
?>
