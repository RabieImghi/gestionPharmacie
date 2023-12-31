<?php
ob_start();
?>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>email</th>
      <th>Role</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($listUsers as $user):
    ?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><?=$user['username']?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?=$user['email']?></p>
      </td>
      <td><?=$user['role']?></td>
      <td class='flex gap-5'>
        <i class="bi bi-pen" data-bs-toggle="modal" data-bs-target="#update<?=$user['user_id']?>"></i>
            <div class="modal fade" id="update<?=$user['user_id']?>" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Vertically Centered</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">UserName</label>
                                <div class="col-sm-10">
                                <input type="text" value="<?=$user['username']?>" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" value="<?=$user['email']?>" class="form-control" id="inputEmail">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select id="inputState" class="form-select">
                                        <option value="admin" <?php if($user['role']=="admin") echo "selected"; ?> >Admin</option>
                                        <option value="patient_en_lign" <?php if($user['role']=="patient_en_lign") echo "selected"; ?>>Patient En ligne</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
        <i class="bi bi-person-x "></i>
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

