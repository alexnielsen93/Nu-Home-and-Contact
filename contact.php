<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="contact.css">
  <title>Document</title>
</head>
<body class = "contact_sheet">
  <?php $name="Name"; $email ="Email"; $phone="Phone"; $comment="Tell us more"?>

  <div class = "left">
    <?php echo"<h1>Contact Us</h1>"?>
    <?php echo"<h4>Send us a message to let us know how we can help.  We typically respond<br> within 24 hours</h4>"?>
    <?php echo "<h4> You can also give us a call <a href=>1-801-994-6987</a></h4>"?>
    <?php echo "<h4>Or send us an email <br> at <a href=>contact@nuethic.com</a></h4>"?>
  </div>
  <div class = "right">
    
    <div class="form-container"><form method="post">
    Name <br> <input class = "input"type ="text" value="<?php echo $name ?>"> <br>
    email <br> <input class = "input"type ="text" value="<?php echo $email ?>"><br>
    phone <br> <input class = "input"type ="text" value="<?php echo $phone ?>"><br>
    What can we do for you? <br> <textarea class ="input" rows="6" cols="50" class = "big-input"type ="text" ><?php echo $comment ?></textarea><br>
    </form>
    <button class = "button">Submit</button>
  </div>
  </div>
</body>
</html>