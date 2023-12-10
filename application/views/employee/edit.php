<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Employee Edit Form</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('employee/update') ?>">
                <input type="hidden" name="employee_id" value="<?= $employee_id ?>" />

                <div class="row">
                    <!-- Employee Name -->
                    <div class="form-group col-md-6">
                        <label for="emp_name">Name:</label>
                        <input id="emp_name" name="emp_name" type="text" class="form-control" value="<?= $employee->name ?>" required />
                    </div>

                    <!-- Employee Email -->
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input id="email" name="email" type="text" class="form-control" value="<?= $employee->email ?>" required />
                    </div>
                </div>

                <div class="row">
                    <!-- Employee Phone -->
                    <div class="form-group col-md-6">
                        <label for="phone">Phone:</label>
                        <input id="phone" name="phone" type="text" class="form-control" value="<?= $employee->phone ?>" required />
                    </div>

                    <!-- Employee Salary -->
                    <div class="form-group col-md-6">
                        <label for="salary">Salary:</label>
                        <input id="salary" name="salary" type="number" class="form-control" value="<?= round($employee->salary) ?>" required />
                    </div>
                </div>

                <!-- Employee Address -->
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" class="form-control"><?= $employee->address ?></textarea>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>