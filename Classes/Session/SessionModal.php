<div class="modal fade bd-example-modal-lg shadow-sm" id="ModalSession" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title" id="ModalLabel">Update Session</h4>
                <img type="button" class="close" data-dismiss="modal" aria-label="Close" src="image/close.png" alt="close" height="30" width="30">
            </div>
            <div class="modal-body ">
                <form action="../Controllers/SessionController.php" method="POST" id="third" class="d-flex justify-content-between pe-5">
                    <div class="fw-bold">
                        <div id="hidden"></div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">dateDebut</label>
                            <input type="date" class="form-control" id="dateDebut1" name="dateDebut">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">dateFin</label>
                            <input type="date" class="form-control" id="dateFin1" name="dateFin">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">title</label>
                            <input type="text" class="form-control" id="title1" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">max number</label>
                            <input type="number" class="form-control" id="maxNumber1" name="maxNumber">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">doctor</label>
                            <select class="form-select form-select-sm ms-5 cart shadow-sm" name="codeDoctor" id="codeDoctor1">
                                <option value="1">doctor 1</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update_session">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>