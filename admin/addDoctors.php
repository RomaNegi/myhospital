<?php
include 'header.php';
?>
  




<div class="container">
<h1 class="center">Add Doctors</h1>


  <div class="row">
    <form class="col s12" action="insertdoctor.php" method="POST">

    <div class="row">
        <div class="input-field col s12">
          <input  id="first_name" type="text" class="validate" name="doctor_name">
          <label for="first_name">Doctor Name</label>
        </div>
      </div>

        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="Address">
          <label for="last_name">Address</label>
        </div>
      

      <div class="row">
        <div class="input-field col s12">
          <input id="text" type="text" class="validate" name="timing">
          <label for="password">Contact No</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="specialists">
          <label for="email">Specialists</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="timing">
          <label for="email">Timing</label>
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
