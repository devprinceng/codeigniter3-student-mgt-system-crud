<div class="container d-flex justify-content-center">
   
    <div class="card  col-md-10">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title h4 text-success">All Students</div>
            <a href="<?=base_url('students/add')?>" class='btn btn-primary'>Add</a>
        </div>
        <div class="card-body">
        <table class="table table-hover">
        <?php if (isset($students)): ?>
            <tr class="text-primary" >
                <th>Student ID</th>
                <th>Name</th>
            </tr>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td>
                        <?= $student['id'] ?>
                    </td>
                    <td>
                        <?= $student['name'] ?>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php elseif (isset($student) && count($student) > 0): ?>
            <tr >
                <th>Student ID</th>
                <th>Name</th>
            </tr>
            <tr>
                <td>
                    <?= $student['id'] ?>
                </td>
                <td>
                    <?= $student['name'] ?>
                </td>
            </tr>
        </table>
    <?php else: ?>
        <p>No Data Availabale</p>
    <?php endif ?>

        </div>
    </div>
</div>
