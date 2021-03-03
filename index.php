<!--<?php (include'conn.php'); ?>-->

   <?php 
      include 'conn.php';
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
<body>

<div>
<form action="/action_page.php">
  <div class="container">
    <h1>Register form</h1>
   
    <hr>
    

   <label for="Firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="Firstname" id="name" required>
  
    <label for="lastname"><b>lastname</b></label>
    <input type="text" placeholder="Enter lastname" name="lastname" id="name" required>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <form action="upload.php" method="post" enctype="multipart/form-data">
      <b> Select image to upload:</b>
   <input type="file" name="fileToUpload" id="fileToUpload">
   <br><br>
    <b> Select File to upload:</b>
   <input type="file" name="fileToUpload" id="fileToUpload">
   
   </form>
   <br>
   <br>
   <label for="birthday"><b>Date of Birth:</b></label>
  <input type="date" id="birthday" name="birthday">
  <br>
  <br>
  <label for="Gender"><b>Gender:</b></label>
  <input list="Gender" name="Gender" id="browser">
  <datalist id="Gender">
    <option value="Male">
    <option value="Female">
    <option value="other">
    </datalist>
    <br>
  <br>
  <label for="Category"><b>Category:</b></label>
  <input list="Category" name="Category" id="browser">
  <datalist id="Category">
    <option value="ST">
    <option value="General">
    <option value="SC">
    </datalist>

    
    <br>
    <br>
    <label for="exampleFormControlTextarea1"><b>Example textarea:</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

    <br><br>
    <div class="state">
    <label for="city"><b>state:</b></label>
    <input list="city" name="city" id="browser">
    <datalist id="city">
    <option value="ahmedabad">
    <option value="surat">
    <option value="rajkot">
    </datalist>
  </div>
<br>
<br>
<div class="city">
    <label for="city"><b>city:</b></label>
    <input list="city" name="city" id="browser">
    <datalist id="city">
    <option value="ahmedabad">
    <option value="surat">
    <option value="rajkot">
    </datalist>
  </div>
  <br><br>
  <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>



      
    <button type="submit" class="registerbtn">Register</button>
  </div>
  </form>
 </div> 

</body>
</html>

