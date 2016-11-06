<?php
include 'header.php';
?>
<div class="container">

<h3 class="blue-text center"> Hospitals </h3>
	<div class="row">
	<div class="col s12 m6">
	
	<div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://lorempixel.com/100/190/nature/6">
    </div>


<br><br><br><br><br><br>
<div class="mainContent asanPage">
    <div class="innerContent container clearfix">
      <div class="headTitle boxshadowCenter"><h1>Hospital</h1></div>
      <center>
      <?php
        $i=1;
        $qry = "SELECT * FROM Hospital";
        $result = mysqli_query($conn, $qry);
        if (mysqli_num_rows($result) != 0)
        {
          while ($row = mysqli_fetch_assoc($result))
          {
        ?>
    <tr>
      <?php 
        $id = $row['id']; ?>
      <td><?php echo $i; ?></td>
      <td><?php echo $row['hospitalname']; ?></td>
      
      <td><a href="edit_hospital.php?hospital=<?php echo $id; ?>">edit/view</a></td>
    </tr>
  <?php 
        $i++; 
      } 
  ?>
    </tbody>
    </table>
    <?php
      }
      else
      {
        echo "<br><br><br><br>";
            echo "<div class='nodata'><h3>No Data Found</h3></div>";
      }
    ?>
    </center>
    </div>
</div>

    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-action">
          <a href="#">This is a link</a>
        </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  </div>

  <div class="col s12 m6">
	<div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://lorempixel.com/100/190/nature/6">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-action">
          <a href="#">This is a link</a>
        </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  </div>
</div>
	
	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red tooltipped" data-position="left" data-delay="50" data-tooltip="Add a hospital" href="addhospital.php">
      <i class="large material-icons">add</i>
    </a>

    </div>
</div>





<?php
include 'footer.php';
?>