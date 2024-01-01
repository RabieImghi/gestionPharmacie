<?php
ob_start();
?>
<div class='pt-4 pb-4'>
  <form method="POST" action="<?=$_ENV['APP_URL']?>/GestionVents">
    <button type="submit" class="btn btn-primary">Telecharge Rapport des Vents</button>
  </form>
</div>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>UserName</th>
      <th>Medicament</th>
      <th>Date Vents</th>
      <th>Type de Vent</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($vents as $vent):
      ?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1"><?=$vent['username']?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?=$vent['name']?></p>
      </td>
      <td>
        <span class="fw-normal mb-1"><?=$vent['date']?></span>
      </td>
      <td><span class="fw-normal mb-1"><?=$vent['type']?></span></td>
      <td class='flex gap-5'>
        <i class="bi bi-pen"></i>
        <i class="bi bi-x-octagon"></i>
      </td>
    </tr>
    <?php
      endforeach;
      ?>
  </tbody>
</table>
<?php
$content=ob_get_clean();
include("header.php");
?>

