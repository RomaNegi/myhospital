<?php
include 'header.php';

?>
  




<div class="container">
<h1 class="center">Add labs</h1>


  <div class="row">
    <form class="col s12" action="insertlab.php" method="POST">

      <div class="row">
        <div class="input-field col s12">
          <input  id="first_name" type="text" class="validate" name="pathologyname">
          <label for="first_name">pathology Name</label>
        </div>
      </div>

        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="Address">
          <label for="last_name">Address</label>
        </div>
      

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="timing">
          <label for="password">Contact No</label>
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


