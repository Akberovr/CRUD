<!DOCTYPE html>
<html>
   <head>
       <title></title>
   </head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>

    <div class="container">
        <h1>Delete a Customer</h1>
        <div class="alert alert-danger">Are you sure to delete?</div>


        <div style="background-color:gray; padding:50px;" class="col-md-12 ">
          <form action="" method="post">
               <input type="submit" class="col-md-offset-2 btn btn-danger" name="delete" value="YES">
               <input type="submit" class="btn btn-default" name="no" value="no">
           </form>
        </div>
    </div>
    <?php
    include 'main.php';

    if(isset($_POST['delete'])){

    $sql = "DELETE FROM userinterface WHERE id = $_GET[id]";
    $query = mysqli_query($db_con,$sql);

    header ('Location:index.php');
}
if(isset($_POST['no'])){
    header ('Location:index.php');
}



     ?>

</body>
</html>
