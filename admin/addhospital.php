<?php
include 'header.php';

?>
  




<div class="container">
<h1 class="center">Add Hospital</h1>


  <div class="row">
    <form class="col s12" action="inserthospital.php" method="POST">

      <div class="row">
        <div class="input-field col s12">
          <input  type="text" class="validate" name="hospital_name">
          <label for="first_name">Hospital Name</label>
        </div>
      </div>

        <div class="input-field col s12">
          <input  type="text" class="validate" name="Address">
          <label for="last_name">Address</label>
        </div>
      

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="contact_no">
          <label for="password">Contact No</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="list_of_doctors">
          <label for="email">List Of Doctors</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="list_of_treatments">
          <label for="email">List Of treatments</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="list_of_services">
          <label for="email">List Of Services</label>
        </div>
      </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>

    </form>
  </div>
  </div>

  

<?php
include 'footer.php';
?>


