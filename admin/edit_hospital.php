<?php
include 'header.php';
$hospital_id = @trim($_GET['Hospital']);
if (empty($hospital_id))
{
	$error1 = "somthing went wrong";
}

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$hospital_name      = $_POST['hospital_name'];
    $Address            = $_POST['Address'];
    $contact_no         = $_POST['contact_no'];
    $list_of_doctors    = $_POST['list_of_doctors'];
    $list_of_treatments = $_POST['list_of_treatments'];
    $list_of_services   = $_POST['list_of_services'];
    $qry = "UPDATE pranayam SET postheading='$heading', postcontent='$content', postvideo='$video' WHERE postid='$asan_id'";

	$result = mysqli_query($conn, $qry);
	if (!empty($result)) 
	{
		$error = "post added!!";
	}
	else
	{
		$error = "something went wrong";
	}
}
?>
<br><br><br><br><br>
    
    <p><?php echo "<div class='nodata'><h3>".@$error1."</h3></div>"; ?></p>
    <?php
    	$qry = mysqli_query($conn, "SELECT * FROM pranayam WHERE postid = $pranayam_id"); 
    	while ($row = mysqli_fetch_assoc($qry))
    	{
    ?>
<div class="mainContent asanPage">
    <div class="innerContent container clearfix">
    	<div class="headTitle boxshadowCenter"><h1>Add a pranayam</h1></div>
    	<div class="asanForm">
    		<center>
    		<?php echo @$error; ?>
            <form class="asanForm" id="asanForm" method="POST" action="edit_pranayam.php?pranayam=<?php echo $pranayam_id;?>" autocomplete=on>
            <input type="text" name="heading" required="yes" placeholder="Name of the pranayam" value="<?php echo $row['postheading'];?>"></input>
            
            <textarea name="content" id="textarea"><?php echo $row['postcontent'];?></textarea>
            <input type="text" name="video" placeholder="Video Url id" value="<?php echo $row['postvideo']?>"></input>
            <br>
            <input type="submit" value="Update Content"></input>
            </form>
            </center>
    	</div>
    </div>
</div>
<?php } ?>

<?php
include 'footer.php';
?>