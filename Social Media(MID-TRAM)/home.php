<?php
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Home page</title>
	<style>
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;">Welcome Home!</h1>
	<center>

	<a href="employee_create_content.php">1.Employee Create Content</a><br><br>
	<a href="changes_documents.php">2.Change Documents</a><br><br>
	<a href="delete_unnessary_images.php
		">3.Delete Unnessary Images</a><br><br>

	<a href="feedback.php">4.Feed Back</a><br><br>
	<a href="review.php">5.Review</a><br><br>
	<a href="support.php">6.Support</a><br><br>
	<a href="manage_user_bands.php">7.Manage User and Brands</a><br><br>
	<a href="offer.php">8.Offer</a><br><br>
	<a href="delete_user_brands.php">9.Delete User & Brands</a><br><br>
	<a href="view_all_things.php">10.View all things</a><br><br>
	<a href="post_blog.php">11.Post Blog</a><br><br>
	<a href="create_campaign.php">12.Create Campaign</a><br><br>
	<a href="logout.php">Logout</a>
	


	</center>
</body>
</html>


<?php
 
 }else{
 	header('location: login.html');
 }

?>