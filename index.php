<?php
include './database/config.php';
$sql = "SELECT * FROM list";
$result = mysqli_query($conn, $sql) or die("Query failed");
$count = mysqli_num_rows($result);
if($count >0 ){


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>To do List App Using PhP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center my-4 py-4" style="font-family:'Times New Roman', Times, serif; "><b>To Do List Using Php</b></h1>
         
   <div class="w-50 m-auto">
    <div class="card">
        <?php
        if(isset($_GET['msg'])){
       $msg = $_GET['msg'];
       echo '<div class="alert alert-warning alert-dismissble fade show" role="alert">'.$msg .'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        
        </div>';
       
        
       
    }
        ?>
        <div class="card-body">
    <form action="insert.php" method="POST" autocomplete="off">
        <label for="">Task:</label>
        <input type="text" class="form-control" name="tesk" placeholder="Enter Text">
        <br>
        <button class="btn btn-primary" type="submit" name="submit">+Add</button>
    </form>
    </div>
    </div>
   </div>
<br>
   <!-- <hr class="w-50 m-auto bg-dark"> -->
   <div class="w-50 m-auto">
   <h1 class="text-center" style="font-family:'Times New Roman', Times, serif;">Your List</h1>
   <br>
   <table class="table table-skylight ">
    <thead style="font-family:'Times New Roman', Times, serif;">
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Task</th>
            <th scope="col">Action</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
            $i = 1;
        while($row = mysqli_fetch_assoc($result)){ ?>
          
        <tr>
            <td style="font-family:'Times New Roman', Times, serif; font-size:20px;"><?php echo $i ?></td>
            <td style="font-family:'Times New Roman', Times, serif; font-size:20px;"><?php echo $row['tesk'] ?></td>
            <td>
                <a href="edit.php?tid=<?php echo $row['id']; ?>">
        <button class="btn btn-success" style="font-family:'Times New Roman', Times, serif; font-size:18px;">Edit</button></a>

        <a href="delete.php?tid=<?php echo $row['id']; ?>"><button class="btn btn-danger"style="font-family:'Times New Roman', Times, serif; font-size:18px;">Delete</button></a>
    </td>
        </tr>
       
     <?php   $i ++; }  }?>
</tbody>
   </table>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>