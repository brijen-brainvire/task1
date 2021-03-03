
<?php
      include 'conn.php';
     
    if (isset($_POST['submit'])) {

    $fname=$_POST['Firstname'];
    $lname = $_POST['lastname']; 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $image=$_POST['image'];


      $file_name = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $destination_name=date('y-m-d h:i:s').'.'.$file_ext;
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"image/".$destination_name);
         echo "Success";
      }else{
         print_r($errors);
      }

    $fileToUpload=$_POST['fileToUpload']; 

    $birthday=$_POST['birthday'];
    $Gender=$_POST['Gender'];
    $Category=$_POST['Category'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
  
$sql=mysqli_query($conn,"SELECT * FROM student WHERE email = '$email' and phone ='$phone'");
$res=mysqli_num_rows($sql);

if($res>1){
  ?>
  <script type="text/javascript">
    alert("Email Or Mobile No. Already Exist");
  </script>
  <?php
}else{


$sql="INSERT INTO `student` (`Firstname`, `lastname`, `email`, `password`, `image`, `fileToUpload`, `birthday`, `Gender`, `Category`, `address`, `state`, `city`, `phone`) VALUES ('$fname', '$lname', '$email', '$password', '$destination_name', '$fileToUpload', '$birthday', '$Gender', '$Category', '$address', '$state', '$city', '$phone')";

$query=mysqli_query($conn,$sql);
?>
  <script type="text/javascript">
    window.location.href='record.php';
    alert("insert successfully...");
  </script>
  <?php


  if($query)
    {
      echo "inserted";
    }
    else
    {
        echo "error".mysqli_error($conn);
    }
  }
}
?>
