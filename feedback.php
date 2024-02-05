<?php include 'config.php'; ?>
<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn,$sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>s

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
  <a href="index.php"><h2 class="fd"><span>Caleb</span> Media</h2></a>
   <a href="feedback.php>"><h3 class="klj">Feedback</h3></a>
        
</div>
  

    <div class="img">
        <img src="jks.jpg" class="ns">
    </div>
    
    <h2 class="past">Past Feedback</h2>
    <div class="mjs">
    <?php if(empty($feedback)): ?>
        <p class="para">There is no feedback!</p>
        <?php endif; ?>

        <?php foreach($feedback as $item): ?>
    <div class="card">
  <p class="pls">
    <?php echo $item['body']; ?>
  </p> 
  <p class="by">
    By <?php echo $item['name']; ?> on <?php echo $item
    ['date']; ?>
  </p> 
</div>
<?php endforeach; ?>
        </div>
</body>
</html> 

    </body