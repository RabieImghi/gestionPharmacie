<?php
ob_start();
?>
  <div class="projects section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Discover Our <em>Products </em> &amp; <span>Medications</span></h2>
            <div class="line-dec"></div>
            <p>Find Best Quality Medications</p>
          </div>
        </div>
      </div> 
    </div>
    <div class="p-4 row">
      <?php
      foreach($medicament as $medicaments):
      ?>
      <div class="item col-lg-3"  >
        <div style="text-align:center" >
          <img src="assets/user/uploads/<?=$medicaments['image_url']?>"  style="width: 70%;" alt="">
        </div>
        <div class="down-content">
          <h4><?=$medicaments['name']?></h4>
          <p><?=$medicaments['description']?></p>
          <a style="cursor: pointer;" onclick="addVent(<?=$medicaments['med_id']?>,<?=$_SESSION['user_id']?>)"><i class="fa fa-cart-plus"></i></a>
        </div>
      </div>
      <?php
      endforeach;
      ?>
    </div>
  </div>
  <script>
    function addVent(idMed,idUser){
        const xhttp = new XMLHttpRequest();
        var data="idMed="+idMed+"&idUser="+idUser;

        xhttp.open("POST", "/larvel/GestionPharmacie/public/addVent",true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        
        xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
        }
        };
        xhttp.send(data);
    }
</script>
<?php
$content=ob_get_clean();
include("header.php");
?>