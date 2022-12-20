<?php
include "includes/header.php";
include_once "includes/conn.php";
?>

<div class="container m-margin-top">
  <!-- job offers -->
  <?php
    $sql = "SELECT vacture, bedrijf, category, datum, opleiding, duur, jaarsalaris, beschrijving FROM vacature";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        // creates a job offer div for every job offer in database
        echo '
        <div class="row justify-content-md-center m-padding-bottom">
          <div class="col col-8">
            <div class="border border-2 rounded-top">
              <b>Vacture: ' . $row["vacture"] . ' - ' . $row["category"] . '</b>
            </div>
          <div class="border border-2 border-top-0 rounded-bottom sm-padding-bottom">
            <textarea class="rounded JobDescription w-100 sm-margin-top" rows="5"
              readonly>' . $row["beschrijving"] . '</textarea>
            </div>
          </div>
        </div>';
      }
    } else {
      // if 0 job offers found shows the user that there are no job offers
      echo '<div class="row justify-content-md-center">
      <div class="col col-8 border border-2 rounded-top">
        <b>Geen vactures gevonden</b>
      </div>
      <div class="col col-8 border border-2 border-top-0 rounded-bottom">
        <textarea class="rounded JobDescription w-100 sm-margin-top" rows="5" readonly></textarea>
      </div>
    </div>
    <br>';
    }
    $conn->close();
    ?>
</div>