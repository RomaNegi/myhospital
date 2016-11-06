<?php
include 'header.php';
$chemist_id = @trim($_GET['id']);
if (empty($chemist_id))
{
	$error1 = "somthing went wrong";
}

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    	$Chemistname		= $_POST['Chemistname'];
		$Address            = $_POST['Address'];
		$Timing             = $_POST['timing'];
	 
    $qry = "UPDATE chemist SET chemistname='$Chemistname', address='$Address', timing='$Timing'  WHERE id='$chemist_id'";

	$result = mysqli_query($conn, $qry);
	if (!empty($result)) 
	{
		header("location: chemist.php");
	}
	else
	{
		$error = "something went wrong";
	}
}
?>
    <?php
    	$qry = mysqli_query($conn, "SELECT * FROM chemist WHERE id = '$chemist_id'"); 
    	while ($row = mysqli_fetch_assoc($qry))
    	{
    ?>
<div class="container">
<h1 class="center">Add Chemists</h1>


  <div class="row">
    <form class="col s12" action="edit_chemist.php?id=<?php echo $row['id'];?>" method="POST">

    <div class="row">
    <div class="input-field col s12">
          <input  id="first_name" type="text" class="validate" name="Chemistname" value="<?php echo $row['chemistname']?>">
          <label for="first_name">Chemistname</label>
        </div>
      
        <div class="input-field col s12">
          <input  id="first_name" type="text" class="validate" name="Address" value="<?php echo $row['address']?>">
          <label for="first_name">Address</label>
        </div>
      </div>

        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="timing" value="<?php echo $row['timing']?>">
          <label for="last_name">Timing</label>
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