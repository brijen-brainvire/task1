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
<body>

<div>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <h1>Register form</h1>
   
    <hr>
    <div>
    <div class="form-group">
    <label for="Firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="Firstname" id="name" required>
    </div>
    <br>

    <div class="form-group">
    <label for="lastname"><b>lastname</b></label>
    <input type="text" placeholder="Enter lastname" name="lastname" id="name" required>
    </div>
    <br>
     
       <div class="form-group">
    <label for="lastname"><b>email</b></label>
    <input type="text" placeholder="Enter email" name="email" id="name" required>
    </div>
    <br>
     
    

    <div class="form-group">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>
    </div>
    <br>

    <div>
    <label for="image"><b>Image_upload:-</b></label>
    <input type="file" name="image" id="image">
    </div>
    <br><br>


    <div class="form-group">
    <label for="psw"><b>file_upload:-</b></label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    <br>
    <br>
    <div class=""name="birthday" for="birthday">
    <label for="birthday"><b>Date of Birth:</b></label>
   <input type="date" id="birthday" name="birthday">
</div>
  <br>
  <br>

  <div class="Gender">
  <label for="Gender"><b>Gender:</b></label>
  <input list="Gender" name="Gender" id="browser">
  <datalist id="Gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="other">other</option>
  </datalist>
  </div>

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
    <label for="exampleFormControlTextarea1"><b>Address:</b></label>
    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>

    <br><br>
    <div class="state" name="state">
    <label for="state"><b>state:</b></label>
    <input list="state" name="state" id="browser">
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
    <input list="city" name="city" id="browser">
    <datalist id="city">
    <option value="ahmedabad"></option>
    <option value="surat"></option>
    <option value="rajkot"></option>
    </datalist>
  </div>
  <br><br>
  <div class="form-group">   
  <label>phone</label>
  <input type="number" name="phone" placeholder="Enter phone no.">
  </div>

      
    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>
  </form>
 </div> 



</body>
</html>

