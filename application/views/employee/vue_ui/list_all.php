<div id="allEmployee">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h6>All Employees</h6>
                <a href="<?= base_url('employee/add') ?>" class="btn btn-sm btn-outline-info">Add New</a>
            </div>
            <div class="card-body">
                <div v-if="message" class="mb-4 alert" v-bind:class="'alert-' + messageColor">
                    {{ message }}
                </div>

                <table v-if="employees && employees.length > 0"
                       class="table table-sm table-bordered table-striped table-hover">
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
                    <tr v-for="(employee, index) in employees" :key="index">
                        <td>{{ index + 1 }}</td>
                        <td>{{ employee.name }}</td>
                        <td>{{ employee.email }}</td>
                        <td>{{ employee.phone }}</td>
                        <td>{{ employee.salary }}</td>
                        <td>{{ employee.address }}</td>
                        <td>
                            <button class="btn btn-sm btn-warning" @click="openModal(employee.ID)">
                                Edit
                            </button>
                            <a class="btn btn-sm btn-danger" @click="confirmDelete(employee.ID)">
                                Delete
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <!-- Page loader -->
                <div v-if="isLoading" class="page-loader">
                    <img src="<?= asset_url('img/loader.gif') ?>" style="height: 150px; width: 400px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <?php $this->load->view('employee/vue_ui/edit_modal'); ?>

    <!-- Delete Modal -->
    <?php $this->load->view('employee/vue_ui/delete_modal'); ?>
</div>
