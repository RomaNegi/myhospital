<?php
include 'header.php';
$hospital_id = @trim($_GET['id']);
if (empty($hospital_id))
{
	$error1 = "somthing went wrong";
}

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $hospital_id        = $_GET['id'];
	  $hospital_name      = $_POST['hospital_name'];
    $Address            = $_POST['Address'];
    $contact_no         = $_POST['contact_no'];
    $list_of_doctors    = $_POST['list_of_doctors'];
    $list_of_treatments = $_POST['list_of_treatments'];
    $list_of_services   = $_POST['list_of_services'];
    $qry = "UPDATE Hospital SET hospitalname='$hospital_name', address='$Address', contactno='$contact_no', listofdoctors='$list_of_doctors', listoftreatments='$list_of_treatments', listofservices='$list_of_services' WHERE id='$hospital_id'";

	$result = mysqli_query($conn, $qry);
	if (!empty($result)) 
	{
		header("location: hospital.php");
	}
	else
	{
		$error = "something went wrong";
	}
}
?>
    <?php
    	$qry = mysqli_query($conn, "SELECT * FROM Hospital WHERE id = $hospital_id"); 
    	while ($row = mysqli_fetch_assoc($qry))
    	{
    ?>

    <div class="container">
<h1 class="center">Add Hospital</h1>
  <div class="row">
    <form class="col s12" action="edit_hospital.php?id=<?php echo $row['id']; ?>" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input  type="text" class="validate" name="hospital_name" value="<?php echo $row['hospitalname']?>">
          <label for="first_name">Hospital Name</label>
        </div>
      </div>

        <div class="input-field col s12">
          <input  type="text" class="validate" name="Address" value="<?php echo $row['address']?>">
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
          <input type="text" class="validate" name="list_of_doctors" value="<?php echo $row['listofdoctors']?>">
          <label for="email">List Of Doctors</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="list_of_treatments" value="<?php echo $row['listoftreatments']?>">
          <label for="email">List Of treatments</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="list_of_services" value="<?php echo $row['listofservices']?>">
          <label for="email">List Of Services</label>
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