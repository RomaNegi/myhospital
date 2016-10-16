<?php
include 'header.php';
?>
  




<div class="container">
<h1 class="center">Add Chemists</h1>


  <div class="row">
    <form class="col s12">

    <div class="row">
        <div class="input-field col s6">
          <input  id="first_name" type="text" class="validate">
          <label for="first_name">Address</label>
        </div>
      </div>

        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Timing</label>
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