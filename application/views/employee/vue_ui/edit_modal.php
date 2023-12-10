<template>
    <!-- Modal component -->
    <form @submit.prevent="updateInfo">
        <div id="editModalID" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ modalTitle }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="employee_id" v-model="employeeInfo.ID"/>

                        <div class="row">
                            <!-- Employee Name -->
                            <div class="form-group col-md-6">
                                <label for="emp_name">Name:</label>
                                <input id="emp_name" name="emp_name" type="text" class="form-control"
                                       v-model="employeeInfo.name" required/>
                            </div>

                            <!-- Employee Email -->
                            <div class="form-group col-md-6">
                                <label for="email">Email:</label>
                                <input id="email" name="email" type="text" class="form-control"
                                       v-model="employeeInfo.email" required/>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Employee Phone -->
                            <div class="form-group col-md-6">
                                <label for="phone">Phone:</label>
                                <input id="phone" name="phone" type="text" class="form-control"
                                       v-model="employeeInfo.phone" required/>
                            </div>

                            <!-- Employee Salary -->
                            <div class="form-group col-md-6">
                                <label for="salary">Salary:</label>
                                <input id="salary" name="salary" type="number" class="form-control"
                                       v-model="employeeInfo.salary" required/>
                            </div>
                        </div>

                        <!-- Employee Address -->
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address"
                                      class="form-control">{{ employeeInfo.address }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>