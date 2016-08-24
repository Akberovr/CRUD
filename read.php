<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style media="screen">
  ul{
    float: left;
    list-style:  none;
  }
  li{
    padding: 30px;

  }
  button{
    position: relative;
    left: 38%;
    top: 30px;
  }
  .con{
    background: aliceblue;
    width: 100;
    height: 100px;

  }

</style>
  </head>
  <body>
    <div class="container">

    <h1>READ CUSTOMER</h1>
    <?php
    $host = 'localhost';
        $user_name="root";
        $password="";
        $db_name="userinterface";
        $db_con=mysqli_connect($host, $user_name , $password , $db_name);

$read_query = "SELECT * FROM table WHERE id = $_GET[id] ";
$query = mysqli_query($db_con,$read_query);
?>


    <ul>
      <li>ID</li>
      <li>Name</li>
      <li>Email Address</li>
      <li>Phone Number</li>
    </ul>

    <ul>
      <?php
          include 'main.php';

          $sql = "SELECT * FROM userinterface WHERE id= $_GET[id]";
          $query = mysqli_query($db_con,$sql);

          $row = mysqli_fetch_assoc($query);
          foreach($row as $key => $value){ ?>
            <li> <?php echo $value; ?> </li>
      <?php  }  ?>

   </ul>

    </div>
    <div class="container con">
          <button class="btn btn-defaul" name="button"><a href="index.php">BACK</a></button>
    </div>
  </body>
</html>
