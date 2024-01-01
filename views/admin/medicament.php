<?php
ob_start();
?>
<div class='pt-4 pb-4'>
  <form method="POST" action="<?=$_ENV['APP_URL']?>/GestionMedicament">
    <button type="submit" class="btn btn-primary">Telecharge Rapport de Stock</button>
  </form>
</div>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>description</th>
      <th>quantity</th>
      <th>price</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($medicament as $medicaments):
      ?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="assets/user/uploads/<?=$medicaments['image_url']?>"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><?=$medicaments['name']?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?=$medicaments['description']?></p>
      </td>
      <td>
        <span class="fw-normal mb-1"><?=$medicaments['quantity']?></span>
      </td>
      <td><span class="fw-normal mb-1"><?=$medicaments['price']?></span></td>
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

