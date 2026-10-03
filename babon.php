<?php
$username = "BSIT BA 3104" ;
$user_id = 1596819;
$user_address = "Nasugbu" ;
$user_gender = "Female" ;
$user_age = 22 ;
$user_email = "iloveGranger@gmail.com" ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Demo</title>
</head>

<body>

    <h1>
      <label>Username:</label>
      <br>
      <?php echo $username?>
      <br>
      <label>User ID:</label>
      <br>
      <?php echo $user_id; ?>
      <br>
      <label>User Address:</label>
      <br>
      <?php echo $user_address?>
      <br>
      <label>User Gender:</label>
      <br>
      <?php echo $user_gender?>
      <br>
      <label>User Age:</label>
      <br>
      <?php echo $user_age?>
      <br>
      <label>User Email:</label>
      <br>
      <?php echo $user_email?>
    <h1>

<button type="button" onclick="greetUser('HELLO!')">Greet User</button>

<script>
    Let username = "<?php echo $username?>";
    Let userID = <?php echo $super_id;?>;
    function greetUser(){
        alert("Hello " + username + "!");
    }
</script>

</body>
</html>
