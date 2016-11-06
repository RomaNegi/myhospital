<?php
include 'header.php';
$pathologylab_id = @trim($_GET['id']);
if (empty($pathologylab_id))
{
	$error1 = "somthing went wrong";
}

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$pathologylab_id = @trim($_GET['id']);
	$Pathologyname      = $_POST['pathologyname'];
	$Address            = $_POST['Address'];
	$Timing             = $_POST['timing'];
	
    	 $qry = "UPDATE pathologylabs SET pathologyname='$Pathologyname', address='$Address', timing='$Timing'  WHERE id='$pathologylab_id'";

	$result = mysqli_query($conn, $qry);
	if (!empty($result)) 
	{
		header("location: pathologylabs.php");
	}
	else
	{
		$error = "something went wrong";
	}
}
?>
    <?php
    	$qry = mysqli_query($conn, "SELECT * FROM pathologylabs WHERE id = '$pathologylab_id'"); 
    	while ($row = mysqli_fetch_assoc($qry))
    	{
    ?>
<div class="container">
<h1 class="center">Add labs</h1>


  <div class="row">
    <form class="col s12" action="edit_pathologylab.php?id=<?php echo $row['id'];?>" method="POST">

      <div class="row">
        <div class="input-field col s12">
          <input  id="first_name" type="text" class="validate" name="pathologyname" value="<?php echo $row['pathologyname']?>">
          <label for="first_name">pathology Name</label>
        </div>
      </div>

        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="Address" value="<?php echo $row['address']?>">
          <label for="last_name">Address</label>
        </div>
      

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="timing" value="<?php echo $row['timing']?>">
          <label for="password">Contact No</label>
        </div>
      </div>


      
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>

    </form>
  </div>
  </div>

<?php } ?>
  

<?php
include 'footer.php';
?>


