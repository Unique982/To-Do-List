<?php
 include './database/config.php';
 if(isset($_POST['update'])){
    $tid = mysqli_real_escape_string($conn,$_POST['tid']);
    $tesk = mysqli_real_escape_string($conn,$_POST['tesk']);
    $sql = "UPDATE list SET tesk = '$tesk' where id = '$tid'";
    if(mysqli_query($conn,$sql)){
        header('location:index.php?msg=Record Updated Successfully');
    } 
    else{
        header('location:index.php?msg=Update Failed');
    }
 }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
     $tid = $_GET['tid'];
     $sql = "SELECT * FROM list where id = '$tid'";
     $result = mysqli_query($conn,$sql) or die("Query failed");
     if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
     
    ?>
  <h1 class="text-center py-4" style="font-family:'Times New Roman', Times, serif; "><b>To Do List Using Php</b></h1>
         
         <div class="w-50 m-auto">
             <div class="card">
                 <div class="card-body">
             <form action="" method="POST" autocomplete="off">
                <input type="hidden" name="tid" value="<?php echo $row['id'] ?>">
         
             <label for="">Task:</label>
        <input type="text" class="form-control" name="tesk"  value="<?php echo $row['tesk']?>";>
     
                 <br>
                 <button class="btn btn-primary" type="submit" name="update">Update</button>
             </form>
             <?php   }

} ?>
             </div>
             </div>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>