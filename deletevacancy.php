<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<?php
if (isset($_SESSION['creatorID'])) {
  $creatorID = $_SESSION['creatorID'];
}
else {
  $creatorID = 3; // 3 will be replaced with $_SESSION['creatorID']
}

$sql = "SELECT id, job, category, date, education, duration, salary, description, creatorID FROM joboffers WHERE creatorID = $creatorID";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '
    <div class="row justify-content-md-center m-padding-bottom">
      <div class="col col-8">
        <div class="border border-2 rounded-top">
          <form action="deletepost.php" method="post">
            <b>Vacture: ' . $row["job"] . ' - ' . $row["category"] . '</b>
            <input type="text" name="id" value="' . $row['id'] . '" hidden>
            <button class="btn btn-danger">Delete</button>
          </form>
        </div>
        <div class="border border-2 border-top-0 rounded-bottom sm-padding-bottom">
          <textarea class="rounded JobDescription w-100 sm-margin-top" rows="5"
            readonly>' . $row["description"] . '</textarea>
        </div>
      </div>
    </div>';
  }
}
?>

<?php
include "includes/footer.php";
?>