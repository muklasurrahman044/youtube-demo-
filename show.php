<!DOCTYPE html>
<html class="no-js">
    <head>

<link rel="icon" type="image/png" href="img/img10.jpg" sizes="196x196" >
	<title>Alumni Informatin</title>
	 <link rel="stylesheet" href="home.css">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
			<h2> Youtube Admin all subscribtions List</h2>
		
    <table cellpadding="5" cellspacing="2" border="1" class="table table-striped table-bordered" id="example">

	
		
		<tr>
    <td>Icon</td>
	<td>Name</td>
	<td>Descriptions</td>
	</tr>

        <tbody>
    <?php
    	
    $conn = new PDO('mysql:host=localhost; dbname=alibaba','root', ''); 
    	$result = $conn->prepare("SELECT * FROM producthome ORDER BY id ASC");
    	$result->execute();
    	for($i=0; $row = $result->fetch(); $i++){
    	$id=$row['id'];
    ?>
	<div>
	
	
   
	
    <tr>
    <td>
    	<?php if($row['image'] != "image"): ?>
    	<img src="image/<?php echo $row['image']; ?>">
    	<?php else: ?>
    	<img src="images/default.png" width="50px" height="50px" style="border:1px solid #333333;">
    	<?php endif; ?></td>
 <td>  <?php echo $row ['name']; ?></td>
  <td> <?php echo $row ['discription']; ?></td>
   
    </tr>
	</div>
    <?php } ?>
    </tbody>
    </table>