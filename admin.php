 <?php
//     session_start();
//     if(isset($_SESSION["log"])){
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/members.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <?php
        include "./components/navbar.php";
    ?>
    <br><br><br><br>

    

<?php  
// INSERT INTO `notes` (`slno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;
// Connect to the Database 
include "./db/config.php";
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `pending_member` WHERE `id` = $id";
  $result = mysqli_query($conn, $sql);
}
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
// if (isset( $_POST['slnoEdit'])){
//   // Update the record
//     $slno = $_POST["slnoEdit"];
//     $name = $_POST["nameEdit"];
//     $email = $_POST["emailEdit"];

  // Sql query to be executed
  // $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`slno` = $slno";
//   $result = mysqli_query($conn, $sql);
//   if($result){
//     $update = true;
// }
// else{
//     echo "We could not update the record successfully";
// }
// }
// else{
//     $title = $_POST["title"];
//     $description = $_POST["description"];

  // Sql query to be executed
//   $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
//   $result = mysqli_query($conn, $sql);

   
//   if($result){ 
//       $insert = true;
//   }
//   else{
//       echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//   } 
// }
// }
?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

 

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">CONFIRM REQUEST</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="POST">
          <div class="modal-body">
            <input type="hidden" name="slnoEdit" id="slnoEdit">
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" id="nameEdit" name="nameEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc">Email</label>
              <input type="text" class="form-control" id="emailEdit" name="emailEdit"></input>
            </div> 
            <div class="form-group">
              <label for="desc">Phone</label>
              <input type="text" class="form-control" id="phoneEdit" name="phoneEdit"></input>
            </div> 
            <div class="form-group">
              <label for="desc">Address</label>
              <input type="text" class="form-control" id="addressEdit" name="addressEdit"></input>
            </div> 
            <div class="form-group">
              <label for="desc">Batch</label>
              <input type="text" class="form-control" id="batchEdit" name="batchEdit"></input>
            </div> 
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="" class="btn btn-warning" id="annual">ANNUAL</button>
            <button type="" class="btn btn-info" id="lifetime">LIFETIME</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    document.getElementById("annual").addEventListener("click", function(){
      console.log("hi annual")
    //   <?php
    //   if (isset( $_POST['slnoEdit'])){
    //     // Update the record
    //       $slno = $_POST["slnoEdit"];
    //       $name = $_POST["nameEdit"];
    //       $email = $_POST["emailEdit"];
    //       $phone = $_POST["phoneEdit"];
    //       $address = $_POST["addressEdit"];
    //       $batch = $_POST["batchEdit"];
      
    //     // Sql query to be executed
    //     $sql_annual = "INSERT INTO `annual_members`(`name`, `email`, `address`, `batch`, `mobile`) VALUES ('$name','$email','$address','$batch','$phone')";
    //     $result_annual = mysqli_query($conn, $sql_annual);
    //     if($result_annual){
    //       $update = true;
    //   }
    //   else{
    //       echo "We could not update the record successfully";
    //   }
    //   }
    //   ?>
    })
    </script>
    
    <script>
    document.getElementById("lifetime").addEventListener("click", function(){
      console.log("hi lifetime")
      <?php
      if (isset( $_POST['slnoEdit'])){
        // Update the record
          $slno = $_POST["slnoEdit"];
          $name = $_POST["nameEdit"];
          $email = $_POST["emailEdit"];
          $phone = $_POST["phoneEdit"];
          $address = $_POST["addressEdit"];
          $batch = $_POST["batchEdit"];
      
        // Sql query to be executed
        $sql_lifetime = "INSERT INTO `lifetime_members`(`name`, `email`, `address`, `batch`, `mobile`) VALUES ('$name','$email','$address','$batch','$phone')";
        $result_lifetime = mysqli_query($conn, $sql_lifetime);
        if($result_lifetime){
          $update = true;
      }
      else{
          echo "We could not update the record successfully";
      }
      }
      ?>
    })
  </script>

  
  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <!-- <th scope="col">ID</th> -->
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Batch</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `pending_member` ORDER BY time";
          $result = mysqli_query($conn, $sql);
          $slno = 0;
          while($row = mysqli_fetch_assoc($result)){
            // $slno = $slno + 1;
        //     echo "<tr>
        //     <th scope='row'>". $slno . "</th>
        //     <td>". $row['title'] . "</td>
        //     <td>". $row['description'] . "</td>
        //     <td> <button class='edit btn btn-sm btn-primary' id=".$row['slno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['slno'].">Delete</button>  </td>
        //   </tr>";
            $img_link = "./images/".substr($row['image'], 0);
            echo "<tr>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['mobile']."</td>
            <td>".$row['address']."</td>
            <td>".$row['batch']."</td>
            <td><a href=".$img_link." target='_blank'>Image</a></td>
            <td> <button class='edit btn btn-sm btn-success' id=1>Approve</button> <button class='delete btn btn-sm btn-danger' id=d".$row['id'].">Remove</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        email = tr.getElementsByTagName("td")[1].innerText;
        phone = tr.getElementsByTagName("td")[2].innerText;
        address = tr.getElementsByTagName("td")[3].innerText;
        batch = tr.getElementsByTagName("td")[4].innerText;
        console.log(name, email);
        nameEdit.value = name;
        emailEdit.value = email;
        phoneEdit.value = phone;
        addressEdit.value = address;
        batchEdit.value = batch;
        slnoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        id = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/admin.php?delete=${id}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>



    <?php
        include "./components/footer.php";
    ?>
</body>
</html>

// <?php
// }
// else{
//     header("Location: ./admin.php");
// }
// ?>
