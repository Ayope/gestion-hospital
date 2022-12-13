<div class="modal fade bd-example-modal-lg shadow-sm" id="ModalSession" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title" id="ModalLabel">Update patient</h4>
                <img type="button" class="close" data-dismiss="modal" aria-label="Close" src="image/close.png" alt="close" height="30" width="30">
            </div>
            <div class="modal-body ">
                <form action="./PatientController.php" method="POST" id="third" class="d-flex justify-content-between pe-5" enctype='multipart/form-data'>
                <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">firstName</label>
      <input type="text" class="form-control" id="firstName1" name="firstName">
</div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">lastName</label>
      <input type="text" class="form-control" id="lastName1" name="lastName">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">email</label>
      <input type="email" class="form-control" id="email1" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">password</label>
      <input type="password" class="form-control" id="password1" name="password">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">NumeroTelephone</label>
      <input type="number" class="form-control" id="NumeroTelephone1" name="NumeroTelephone">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">city</label>
      <input type="text" class="form-control" id="city1" name="city">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">cin</label>
      <input type="text" class="form-control" id="cin1" name="cin">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">birthDay</label>
      <input type="date" class="form-control" id="birthDay1" name="birthDay">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">cin</label>
      <input type="text" class="form-control" id="cin1" name="cin">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">icon</label>
      <input type="text" class="form-control" id="icon" name="icon">
    </div>
    <div id="hidden_img"></div>
    <div id="img"></div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">gender</label>
      <select class="form-select form-select-sm ms-5 cart shadow-sm" name="gender" id="gender">
        <option value="female">female</option>
        <option value="male">male</option>
      </select>
    </div>
                        <button type="submit" class="btn btn-primary" name="update_session">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>