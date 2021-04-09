<?php
$user="id16550298_twotope";
$pass="@Password1_2";
$db= "id16550298_dvapp";
$conn = new mysqli("localhost",$user,$pass,$db);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if(isset($_GET['reg'])){
    $reg = $_GET['reg'];
    $reg = str_replace("'","",$reg);
    $reg = str_replace('"','',$reg);
    if(!empty($reg)){
        $query =mysqli_query($conn,"SELECT*FROM drug_info WHERE RegNo='$reg' LIMIT 1");
        if(mysqli_num_rows($query)==1){
            $data = mysqli_fetch_assoc($query);
            $arr =array('Status'=>'success','Brand'=>$data['BrandName'],'RegNo'=>$data['RegNo'],'Response'=>'this drug is verified by NAFDAC');
           
echo  json_encode($arr);
   exit();

        } else {
        $arr = array('Status'=>'fail','RegNo'=>$reg,'Response'=>'This drug is not verified by NAFDAC');
echo  json_encode($arr);
   exit();

        
        }
        
    } else {
        $arr = array('Status'=>'fail', 'Response'=>'reg can not be empty');
echo  json_encode($arr);
   exit();

        
    }
    
} else {
    $arr = array('Status'=>'fail','Respose'=>'reg is not set');
   echo  json_encode($arr);
   exit();
}



?>