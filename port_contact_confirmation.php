
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Digital Alchemy Artist Design Portfolio</title>
<script src="https://kit.fontawesome.com/202252364c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap&family=Lato&display=swap&family=Fjalla+One&family=Lato:wght@900&family=Montserrat:wght@500&family=Open+Sans:wght@700&family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
<link href="portfoliomain.css" rel="stylesheet" type="text/css">
</head>
<body>


	<section class="contact-rec">
		<div class="container">
	
	
		
<?php

$name = $_POST['name'];
$selected_val = $_POST['services'];
$email = $_POST['email'];

echo "Hello " . $name . "<br />";

echo "We have recieved your request for information regarding " . $selected_val . "<br />";

echo "We will be in contact soon using your email, " . $email . "<br />";


?>

		<div>
	
<a href="http://sotd.us/bradneumann/portfolio.html" class="btn home-btn">Back home</a></div>
		
		</div></section>

<script src="https://unpkg.com/scrollreveal"></script> 
<script src="portfolio.js"></script> 
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> 

</body>
</html>