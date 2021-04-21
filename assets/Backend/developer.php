<?php 
header('Access-Control-Allow-Origin: *'); 
 
 
$user="id16550298_drug1";
$pass="3%0xUW!Su!WT+^FV";
$db= "id16550298_drug";
$conn = new mysqli("localhost",$user,$pass,$db);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $id = str_replace("'","",$id);
    $id = str_replace('"','',$id);
    
    $url = "https://".$_SERVER['SERVER_NAME']."/images/";
    if(!empty($id)){
        $query =mysqli_query($conn,"SELECT*FROM data WHERE id='$id' LIMIT 1");
        if(mysqli_num_rows($query)==1){
            $data = mysqli_fetch_assoc($query);
            $arr =array('Status'=>'success','FullName'=>$data['name'],'Position'=>$data['position'],'stack'=>$data['stack'],'Github'=>$data['github'],'Twitter'=>$data['twitter'],'Linkedin'=>$data['linkedin'],'Image'=>$url.$data['image']);
           
echo  json_encode($arr);
   exit();

        } else {
        $arr = array('Status'=>'fail','id'=>$id,'Response'=>'invalid id');
echo  json_encode($arr);
   exit();

        
        }
        
    } else {
        $arr = array('Status'=>'fail', 'Response'=>'id can not be empty');
echo  json_encode($arr);
   exit();

        
    }
    
} else {
    $arr = array('Status'=>'fail','Respose'=>'id is not set');
   echo  json_encode($arr);
   exit();
}



?>