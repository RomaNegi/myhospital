<?php
include 'header.php';
$doctor_id = @trim($_GET['id']);
if (empty($doctor_id))
{
	$error1 = "somthing went wrong";
}

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $doctor_name        = $_POST['doctor_name'];
    $Address            = $_POST['Address'];
    $contact_no         = $_POST['contact_no'];
    $Specialists        = $_POST['specialists'];
    $timing             = $_POST['timing'];
    
    $qry = "UPDATE doctors SET doctorname='$doctor_name', address='$Address', contactno='$contact_no', specialists='$Specialists', timing='$timing'  WHERE id='$doctor_id'";

	$result = mysqli_query($conn, $qry);
	if (!empty($result)) 
	{
		header("location: doctor.php");
	}
	else
	{
		$error = "something went wrong";
	}
}
?>
    <?php
    	$qry = mysqli_query($conn, "SELECT * FROM doctors WHERE id = $doctor_id"); 
    	while ($row = mysqli_fetch_assoc($qry))
    	{
    ?>

<div class="container">
<h1 class="center">Add Doctors</h1>


  <div class="row">
    <form class="col s12" action="edit_doctor.php?id=<?php echo $row['id']; ?>"  method="POST">

    <div class="row">
        <div class="input-field col s12">
          <input  id="first_name" type="text" class="validate" name="doctor_name" value="<?php echo $row['doctorname']?>">
          <label for="first_name">Doctor Name</label>
        </div>
      </div>

        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="Address" value="<?php echo $row['address']?>">
          <label for="last_name">Address</label>
        </div>
      

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="contact_no" value="<?php echo $row['contactno']?>">
          <label for="password">Contact No</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="specialists" value="<?php echo $row['specialists']?>">
          <label for="email">Specialists</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="timing" value="<?php echo $row['timing']?>">
          <label for="email">Timing</label>
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
