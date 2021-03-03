<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Update</title>

<body>
 <?php
require('conn.php');
$id =$_REQUEST['user_id'];
echo $id;

    $sql1="SELECT * FROM student Where id='$id'";
     $query1= mysqli_query($conn,$sql1);

          $row = mysqli_fetch_assoc($query1);

?>

<div>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <h1>Register form</h1>
   
    <hr>
    <div>
    <div class="form-group">
    <label for="Firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="Firstname" value="<?php echo $row['Firstname'];?>" id="name" required>
    </div>
    <br>

    <div class="form-group">
    <label for="lastname"><b>lastname</b></label>
    <input type="text" placeholder="Enter lastname" name="lastname" value="<?php echo $row['lastname'];?>" id="name"  id="name" required>
    </div>
    <br>
     
       <div class="form-group">
    <label for="lastname"><b>email</b></label>
    <input type="text" placeholder="Enter email" name="email" id="name" value="<?php echo $row['email'];?>" id="name"  id="name" required>
    </div>
    <br>
     
    

    <div class="form-group">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" value="<?php echo $row['password'];?>" required>
    </div>
    <br>

    <div>
    <label for="image"><b>Image_upload:-</b></label>
    <input type="file" name="image" id="image" value="<?php echo $row['image'];?>" >
    </div>
    <br><br>


    <div class="form-group">
    <label for="psw"><b>file_upload:-</b></label>
    <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $row['fileToUpload'];?>">
    </div>
    <br>
    <br>
    <div class=""name="birthday" for="birthday">
    <label for="birthday"><b>Date of Birth:</b></label>
   <input type="date" id="birthday" name="birthday" value="<?php echo $row['birthday'];?>">
</div>
  <br>
  <br>

  <div class="Gender">
  <label for="Gender"><b>Gender:</b></label>
  <input list="Gender" name="Gender" id="browser" value="<?php echo $row['Gender'];?>">
  <datalist id="Gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="other">other</option>
  </datalist>
  </div>

    <br>
  <br>
  <label for="Category"><b>Category:</b></label>
  <input list="Category" name="Category" id="browser" value="<?php echo $row['Category'];?>">
  <datalist id="Category">
    <option value="ST">
    <option value="General">
    <option value="SC">
    </datalist>

    
    <br>
    <br>
    <label for="exampleFormControlTextarea1"><b>Address:</b></label>
  <>  <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>

    <br><br>
    <div class="state" name="state">
    <label for="state"><b>state:</b></label>
    <input list="state" name="state" id="browser" value="<?php echo $row['state'];?>">
    <datalist id="state">
    <option value="Gujrat">
    <option value="Maharatra">
    <option value="U.P">
    </datalist>
  </div>
<br>
<br>
<div class="city" name="city">
    <label for="city"><b>city:</b></label>
    <input list="city" name="city" id="browser" value="<?php echo $row['city'];?>">
    <datalist id="city">
    <option value="ahmedabad"></option>
    <option value="surat"></option>
    <option value="rajkot"></option>
    </datalist>
  </div>
  <br><br>
  <div class="form-group">   
  <label>phone</label>
  <input type="number" name="phone" placeholder="Enter phone no." value="<?php echo $row['phone'];?>">
  </div>

      
    <button type="submit" name="updt" class="registerbtn">update</button>
  </div>
  </form>
 </div> 



</body>


<?php


  if($_POST['update']){

require('conn.php');

  $fname=$_POST['Firstname'];

  $lname=$_POST['lastname'];             

  $email=$_POST['email'];

  $password=$_POST['password'];

  $image=$POST['image']; 
  


      //profile pic

  
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
      //resume 

  




  $fileToUpload=$Resume_name;
  
  move_uploaded_file($Resume_tmp,"Upload/".$fileToUpload);

  $birthday=$_POST['birthday'];

  $Gender=$_POST['Gender'];

  $Category = $_POST['Category'];

  $address = $_POST['address'];
  
  $state = $_POST['state']; 

  $city = $_POST['city'];

  $phone = $_POST['phone'];

  $select="SELECT * from `Student` where Email ='$email'";

  $res=mysqli_query($conn,$select);


  if (mysqli_num_rows($res) > 0) 
  {

    $row = mysqli_fetch_assoc($res);

        if($email == isset($row['Email'])) //check email apc_exists(keys)
        {
         echo "email already exists";
       } 

     }
     else{

     $update = "UPDATE student SET Firstname = '$fname' , LastName ='$lname' , email = '$email' , password = '$password', image= '$image' , fileToUpload = '$fileToUpload',birthday = '$birthday',Gender ='$Gender', Category = '$Category' , address = '$address' , State ='$state', City='$city' , phone='$phone' WHERE id = $id ";


      $result = mysqli_query($conn,$update);

      header('Location:record.php');



    }
  }
  else{

    echo "hi";

    $sql = "Select * from Student where id=$id";


    $res = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_assoc($res)) {
        
        $fname = $row['FirstName'];
        $lname = $row['LastName'];
        $email = $row['Email'];
        $phone = $row['Phone'];
        $birthdate = $row['Birthdate'];
        $gender = $row['Gender'];
        $address = $row['Address'];
        $state = $row['State'];
        $city = $row['City'];
        $category = $row['Category'];

        echo $address;
        echo $category;

                
     } 

  }
  
  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
h1{color: green;

}
/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.container{
  width: 600px;
  margin-left: 300px;
}

</style>
</head>

</html>


<script type="text/javascript">

  function validateForm() {
    var confirmPassword = document.forms["RegisterForm"]["confirmPassword"].value;
    var password = document.forms["RegisterForm"]["password"].value;

    if(password != confirmPassword)
    {
      alert('password should be match');
      return false;
    }
    return true;


  }


</script>
<script type="text/javascript">

  $('#state').on('change', function(){
    var stateID=$(this).val();
    
    document.getElementById("statevalue").value = $(this).find('option:selected').text();


    if(stateID){
      $.ajax({
        type:'POST',
        url:'ajaxData.php',
        data:'state_id='+stateID,
        success:function(html){
          $('#city').html(html);
        }
      }); 
    }else{
      $('#city').html('<option value="">Select state first</option>'); 
    }
  });

  $('#city').on('change', function(){

    
    document.getElementById("cityvalue").value = $(this).find('option:selected').text();

  });

</script>
<script type="text/javascript">
function display(input) {

   if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(event) {
         $('#myid').attr('src', event.target.result);
      }
      reader.readAsDataURL(input.files[0]);
   }
}

$("#profilepic").change(function() {
   display(this);
});
</script>
