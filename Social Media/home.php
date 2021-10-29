<?php
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1 style="text-align: center;">Welcome home!</h1>
	<center>

		
	<a href="employee_create_content.php">1.Employee Create Content</a><br>
	<a href="changes_documents.php">2.Change Documents</a><br>
	<a href="delete_unnessary_images.php
		">3.Delete Unnessary Images</a><br>

	<a href="feedback.php">4.Feed Back</a><br>
	<a href="review.php">5.Review</a><br>
	<a href="support.php">6.Support</a><br>
	<a href="manage_user_bands.php">7.Manage User and Brands</a><br>
	<a href="offer.php">8.Offer</a><br>
	<a href="delete_user_brands.php">9.Delete User & Brands</a><br>
	<a href="view_all_things.php">10.View all things</a><br>
	<a href="post_blog.php">11.Post Blog</a><br>
	<a href="create_campaign.php">12.Create Campaign</a><br>
	<a href="logout.php">Logout</a>
	


	</center>
</body>
</html>


<?php
 
 }else{
 	header('location: login.html');
 }

?>