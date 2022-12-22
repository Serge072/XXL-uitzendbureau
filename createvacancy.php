<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<div class="row justify-content-md-center m-padding-bottom">
  <div class="col col-8">
    <div class="border border-2 m-margin-top sm-padding-bottom">
      <h3 class="sm-padding">Nieuw vacture</h3>

      <!-- Job offer form -->
      <form class="was-validated sm-padding" action="postvacancy.php" method="post">
        <div class="row">
          <div class="col col-6">
            <label class="form-label sm-margin-top">Vacture</label>
            <input type="text" class="form-control" name="job" required>
          </div>
          <div class="col col-6">
            <label class="form-label sm-margin-top">Category</label>
            <input type="text" class="form-control" name="category" required>
          </div>
          <div class="col col-4">
            <label class="form-label sm-margin-top">Opleiding</label>
            <select class="form-select" name="education" required>
              <option value="">Kies een opleiding</option>
              <option value="mbo">mbo</option>
              <option value="hbo">hbo</option>
              <option value="wo">wo</option>
            </select>
          </div>
          <div class="col col-4">
            <label class="form-label sm-margin-top">Duur</label>
            <select class="form-select" name="duration" required>
              <option value="">Kies een duratie</option>
              <option value="vast">vast</option>
              <option value="tijdelijk">tijdelijk</option>
            </select>
          </div>
          <div class="col col-4">
            <label class="form-label sm-margin-top">Jaar salaris</label>
            <input type="number" class="form-control" min="0" name="salary" required>
          </div>
          <div class="col col-12">
            <label class="form-label sm-margin-top">Beschrijving</label>
            <textarea class="form-control" name="description" min-rows="5" rows="5" required></textarea>
          </div>
          <div class="col-12">
            <input class="btn btn-primary m-margin-top" type="submit">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include "includes/footer.php";
?>