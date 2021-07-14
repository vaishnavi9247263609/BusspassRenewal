<?php
 session_start();
 $ip_add=getenv("REMOTE_ADDR");
 include "connect.php";
 echo "connected";
// mysqli_set_charset($con,"utf8mb4_generic_ci");
$dp=$_POST['dropdown'];

$aa=$_POST['aadhar'];
$today = date("Y-m-d");
$fileloc=$_FILES['fileupload']['tmp_name'];
$filename=$_FILES['fileupload']['name'];
$filestore="buspass/".$filename;

//move_uploaded_file($fileloc,$filestore); 

//Get the content of the image and then add slashes to it 
$imagetmp=base64_encode(file_get_contents($_FILES['fileupload']['tmp_name']));

$ef = date('Y-m-d', strtotime("+3 months", strtotime($today)));
//echo $aa;
//echo gettype($today);
//echo gettype($ef);


$sql="UPDATE data SET Categories=?, Bonafide=? WHERE Aadhar=?";
//mysqli_query($con,"INSERT INTO data(InstituteName,Institutecode,CourseName,Coursecode,AdmissionNo,Routef,Routeend,Via,Addresss,City,Pincode,Aadhar,Phone) VALUES ('$in','$ic','$cn','$cc','$id','$rf','$re','$v','$a','$ci','$p','$aa','$phone')");
if($stmtt=mysqli_prepare($con,$sql))//"INSERT INTO data(InstituteName,Institutecode,CourseName,Coursecode,AdmissionNo,Routef,Routeend,Via,Addresss,City,Pincode,Aadhar,Phone) VALUES ('$innn','y','y','i','u','5','5','3','12','3','5','123123123123','557452')"))
{
   
    mysqli_stmt_bind_param($stmtt,"sss",$dp,$imagetmp,$aa);
    
    mysqli_stmt_execute($stmtt);
    //echo mysqli_affected_rows($con);
    echo "Entered";
}
else{
    echo "error";
}


?>

<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<style>
.BUTTON_BNM {
   background: #3D94F6;
   background-image: -webkit-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -moz-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -ms-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -o-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -webkit-gradient(to bottom, #3D94F6, #1E62D0);
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   color: #FFFFFF;
   font-family: Open Sans;
   font-size: 40px;
   font-weight: 100;
   padding: 40px;
   -webkit-box-shadow: 1px 1px 20px 0 #000000;
   -moz-box-shadow: 1px 1px 20px 0 #000000;
   box-shadow: 1px 1px 20px 0 #000000;
   text-shadow: 1px 1px 20px #000000;
   border: solid #337FED 1px;
   text-decoration: none;
   display: inline-block;
   cursor: pointer;
   text-align: center;
}

.BUTTON_BNM:hover {
   border: solid #337FED 1px;
   background: #1E62D0;
   background-image: -webkit-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -moz-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -ms-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -o-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -webkit-gradient(to bottom, #1E62D0, #3D94F6);
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   text-decoration: none;
}
</style>
<body>
<a href="home.html" class="BUTTON_BNM"><h2>HOME</h2></a>


</body>
</html>