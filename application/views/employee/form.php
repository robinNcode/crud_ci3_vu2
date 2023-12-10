<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h6>Employee Registration Form</h6>
            <a href="<?= base_url('employee/index') ?>" class="btn btn-sm btn-outline-info">List</a>
        </div>
        <div class="card-body">
            <div id="app" class="container">
                <div v-if="message" class="mb-4 alert" v-bind:class="'alert-' + messageColor">
                    {{ message }}
                </div>

                <form ref="employeeAddForm" @submit.prevent="submitForm">
                    <!-- Employee Name -->
                    <div class="form-group row">
                        <label for="emp_name" class="col-sm-3 col-form-label">Name:</label>
                        <div class="col-sm-9">
                            <input v-model="formData.name" type="text" class="form-control" id="emp_name" name="emp_name" required>
                        </div>
                    </div>

                    <!-- Employee Email -->
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-9">
                            <input v-model="formData.email" type="text" class="form-control" id="email" name="email" required>
                        </div>
                    </div>

                    <!-- Employee Phone -->
                    <div class="form-group row">
                        <label for="phone" class="col-sm-3 col-form-label">Phone:</label>
                        <div class="col-sm-9">
                            <input v-model="formData.phone" type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>

                    <!-- Employee Salary -->
                    <div class="form-group row">
                        <label for="salary" class="col-sm-3 col-form-label">Salary:</label>
                        <div class="col-sm-9">
                            <input v-model="formData.salary" type="number" class="form-control" id="salary" name="salary" required>
                        </div>
                    </div>

                    <!-- Employee Address -->
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Address:</label>
                        <div class="col-sm-9">
                            <textarea v-model="formData.address" class="form-control" id="address" name="address"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

                <!-- Page loader -->
                <div v-if="loading" class="page-loader">
                    <img src="<?= asset_url('img/loader.gif') ?>" style="height: 150px; width: 400px;">
                </div>
            </div>
        </div>
    </div>
</div>