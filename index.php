<?php include 'config.php'; ?>
<?php 
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';
 
if(isset($_POST['submit']))
{
if(empty($_POST['name']))
{$nameErr = 'Name is required';}
else{
    $name = filter_input(INPUT_POST, 'name',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

if(empty($_POST['email']))
{$emailErr = 'email is required';}
else{
    $email = filter_input(INPUT_POST, 'email',
    FILTER_SANITIZE_EMAIL);
}

if(empty($_POST['body']))
{$bodyErr = 'feedback is required';}
else{
    $body = filter_input(INPUT_POST, 'body',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
if(empty($nameErr) && empty($emailErr) && empty($bodyErr)
)
{
    $sql ="INSERT INTO feedback (name, email,body) VALUES
    ('$name', '$email' , '$body')";
    if(mysqli_query($conn, $sql)){
        header('location:feedback.php');
    }
    else{ 'Error:' .mysqli_error($conn);
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
  </div>


    <div class="header">
    <h2 class="fd"><sspan>Caleb</span> Media</h2>
        <a href="feedback.php" ><h3 class="klj">Feedback</h3></a>
        
</div>

    <div class="img">
        <img src="jks.jpg" class="ns">
    </div>
    <div class="ghj">
    <h2 class="impo">Give us your feedback!</h2>
</div>
        <div class="kol"> 
            <form action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="ls">    
  <input name="name" id ="name" class="feedback-input" type="text" placeholder="Name" required />
  <div class="invalid">
    
  </div>   
  <input name="email" id= "email" type="email" class="feedback-input" placeholder="Email" value required autocomplete ="email" />
  <textarea name="body" id="body" type="text" class="feedback-input" placeholder="enter your feedback" required></textarea>
  <input type="submit" name="submit" value="Send"/>
</form>

</div>


    

</body>
</html>