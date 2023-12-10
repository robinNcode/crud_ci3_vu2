<template>
    <!-- Modal component -->
    <div id="deleteModalID" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ modalTitle }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 class="text-danger">Are sure you want to delete this info?</h6>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-danger" @click="deleteEmployee(employeeInfo.ID)">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>