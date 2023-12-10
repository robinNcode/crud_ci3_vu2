<div class="container mt-5">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h6>All Employees</h6>
            <a href="<?= base_url('employee/add') ?>" class="btn btn-sm btn-outline-info">Add New</a>
        </div>
        <div class="card-body">
            <?php if (!empty($employees)) : ?>
                <table class="table table-sm table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Salary</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($employees as $index => $employee) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $employee->name ?></td>
                            <td><?= $employee->email ?></td>
                            <td><?= $employee->phone ?></td>
                            <td><?= $employee->salary ?></td>
                            <td><?= $employee->address ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="<?= base_url('employee/edit') . '/' . $employee->ID ?>">
                                    Edit
                                </a>
                                <a class="btn btn-sm btn-danger" href="<?= base_url('employee/delete') . '/' . $employee->ID ?>">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>

</script>