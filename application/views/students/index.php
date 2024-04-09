<h3 style="background-color: gray; color:white; padding:10px;">All Students</h3>

<table>
    <?php if (isset($students)): ?>
        <tr style="background-color:lightgray; color:blue">
            <th style="padding:10px">Student ID</th>
            <th style="padding:10px">Name</th>
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
        <tr style="background-color:lightgray; color:blue">
            <th style="padding:10px">Student ID</th>
            <th style="padding:10px">Name</th>
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