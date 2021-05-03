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
  
  $v =0;
   $ar1 =array();
   $ar2 = array();
    
    $url = "https://".$_SERVER['SERVER_NAME']."/images/";
        $query =mysqli_query($conn,"SELECT*FROM data WHERE ID='1'");
            $data=mysqli_fetch_assoc($query);
            $query =mysqli_query($conn,"SELECT*FROM data WHERE ID='2'");
            $data2=mysqli_fetch_assoc($query);
            $query =mysqli_query($conn,"SELECT*FROM data WHERE ID='3'");
            $data3=mysqli_fetch_assoc($query);
            $query =mysqli_query($conn,"SELECT*FROM data WHERE ID='4'");
            $data4=mysqli_fetch_assoc($query);
            $query =mysqli_query($conn,"SELECT*FROM data WHERE ID='5'");
            $data5=mysqli_fetch_assoc($query);
            
           
            
            
           $arr ='{"Status":"success","developers":[{"FullName":"'.$data["name"].'","Position":"'.$data["position"].'","stack":"'.$data["stack"].'","Github":"'.$data["github"].'","Twitter":"'.$data["twitter"].'","Linkedin":"'.$data["linkedin"].'","Image":"'.$url.$data["image"].'"},{"FullName":"'.$data2["name"].'","Position":"'.$data2["position"].'","stack":"'.$data2["stack"].'","Github":"'.$data2["github"].'","Twitter":"'.$data2["twitter"].'","Linkedin":"'.$data2["linkedin"].'","Image":"'.$url.$data2["image"].'"},{"FullName":"'.$data3["name"].'","Position":"'.$data3["position"].'","stack":"'.$data3["stack"].'","Github":"'.$data3["github"].'","Twitter":"'.$data3["twitter"].'","Linkedin":"'.$data3["linkedin"].'","Image":"'.$url.$data3["image"].'"},{"FullName":"'.$data4["name"].'","Position":"'.$data4["position"].'","stack":"'.$data4["stack"].'","Github":"'.$data4["github"].'","Twitter":"'.$data4["twitter"].'","Linkedin":"'.$data4["linkedin"].'","Image":"'.$url.$data4["image"].'"},{"FullName":"'.$data5["name"].'","Position":"'.$data5["position"].'","stack":"'.$data5["stack"].'","Github":"'.$data5["github"].'","Twitter":"'.$data5["twitter"].'","Linkedin":"'.$data5["linkedin"].'","Image":"'.$url.$data5["image"].'"}]}';
          
    

        
      echo $arr;

?>