<?php
session_start();

$pageTitle = "Forum";
require_once("db/db_connect.php");

$post_submit="";
$title_submit = "";
if(isset($_POST["submit"])){
	$post_submit = $_POST["post"];
	$title_submit = $_POST["title"];
}

$_SESSION['like'] = isset($_SESSION['like']) ? ++$_SESSION['like'] : 0;        
$_SESSION['dislike'] = isset($_SESSION['dislike']) ? ++$_SESSION['dislike'] : 0;        

if(isset($_GET["cat"])){
	if ($_GET["cat"] == "make") {
		$pageTitle = "make";
	}else{
		$pageTitle = "view";
	}
}

include_once("inc/header_main.php");
 ?>
<a href="comunity.php?cat=make">Make a Post</a> |
<a href="comunity.php?cat=view">View Posts</a>


<h1><?php echo $pageTitle; ?></h1>
<!-- <div class="col-md-4 col-lg-6">
	<form name="post" method="POST" action="community.php">
		<input type="text" placeholder="Title" name="title" />
		<textarea name="post" id="post"></textarea><br />
		<input type="submit" value="Post" name="submit" />

		<input type="submit" value="Like" name="like" />
		<input type="submit" value="Dislike" name="dislike" />
	</form>
</div>

<div class="col-md-4 col-lg-6">
	<p><?php //echo $post_submit;  ?></p>
	<p><?php //echo $title_submit;  ?></p>
	<span><?php //if(isset($_SESSION['like'])){
  // echo $_SESSION['like'];} ?></span>&nbsp;
	<span><?php //if(isset($_SESSION['dislike'])){
   // echo $_SESSION['dislike']} ?></span>
</div> -->

<?php
include_once("inc/footer_main.php");

?>