<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header bg-primary d-flex justify-content-between">
                    <h4 class="text-white">Add Students</h4>
                    <a href="<?= base_url('students') ?>" class="btn btn-danger">BACK</a>
                </div>

                <div class="card-body">
                    <form method="post" action="<?= base_url('students/save') ?>">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="eg: Dev Prince" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Reg No</label>
                            <input type="text" class="form-control" name="regno" placeholder="eg. 20/csc/000" />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Department</label>
                            <select class="form-select form-select-lg" name="department">
                                <option selected>Select one</option>
                                <option value="Computer science">Computer science</option>
                                <option value="Mass Comm">Mass Comm</option>
                                <option value="English">English</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Phone</label>
                            <input type="phone" class="form-control" name="phone" placeholder="Eg. 090xxx" />
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
