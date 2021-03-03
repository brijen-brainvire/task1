<?php
	include "conn.php";
	if(isset($_GET['type'])){
		$type=$_GET['type'];
		if($type=='delete'){
			$user_id=$_GET['user_id'];
			$delete_sql=mysqli_query($conn,"DELETE FROM student WHERE id='$user_id'");
			?>	
			<script type="text/javascript">
				alert("delete succesfully");
				window.location.href='record.php';
			</script>
			<?php
		}

	}
?>


<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Show List</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
  
  
  <body>
    <div class="input-group">
    	<form method="post">
  <div class="form-outline">
                         
    <input type="search"  name="search" class="form-control" placeholder="search record" />
    
  </div>
  <button type="submit" style="background-color: maroon;" value="submit" name="btnsearch">
    Search
  </button>
                           </form>
  </div>
  
  <table class="table">

    <thead style="background-color: maroon; ">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Firstname</th>
        <th scope="col">lastname</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
        <th scope="col">image</th>

        <th scope="col">birthday</th>
        <th scope="col">Gender</th>
        <th scope="col">Category</th>
        <th scope="col">address</th>
        <th scope="col">State</th>
        <th scope="col">City</th>
        <th scope="col">phone</th>
        <th scope="col">action</th>
        <th scope="col">action</th>
       
        



      </tr>
    </thead>

    <?php
    if(isset($_POST['btnsearch']))
    {
    include('conn.php');
     $search_str=$_POST["search"];


    $sql = "SELECT * FROM student WHERE Firstname LIKE '%$search_str%' ";

    $result = mysqli_query($conn,$sql);
        
       if(mysqli_num_rows($result))
       {
      while($row = mysqli_fetch_array($result)) {
        ?>
        <tbody>
          <tr>

            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['Firstname'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>

            <td><img height=100 width="100" src="./image/<?php echo $row['image']; ?>"></td>
            	
            <td><?php echo $row['birthday'];?></td>

            <td><?php echo $row['Gender'];?></td>
            <td><?php echo $row['Category'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['state'];?></td>
            <td><?php echo $row['city'];?></td>
            <td><?php echo $row['phone'];?></td>
           <td><a href='?type=delete&user_id=<?php echo $row['id'] ?>'>Delete</a></td>
           <td><a href='update.php?type=update&user_id=<?php echo $row['id'] ?>'>update</a></td>

            


          </tr>


      <?php
    }
   }
   else
   	echo "error".mysqli_error($conn);

}

      
    ?>
    </tbody>
    </table>

  </body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>