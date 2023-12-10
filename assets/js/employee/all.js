let allUrl = baseUrl + 'api/employee/index';
let specificInfoUrl = baseUrl + 'api/employee/edit/';
let updateUrl = baseUrl + 'api/employee/update';
let deleteUrl = baseUrl + 'api/employee/delete/';

let app = new Vue({
    el: '#allEmployee',
    data: {
        isLoading: false,
        message: '',
        messageColor: '',
        employees: '',
        modalTitle: 'Edit employee information',
        employeeInfo : {
            ID: null,
        }
    },
    methods: {
        getAllEmployees() {
            this.isLoading = true;

            setTimeout(() => {
                axios.get(allUrl)
                    .then(response => {
                        this.employees = response.data.data;
                    })
                    .catch(error => {
                        console.error(error.status);
                    });
                this.isLoading = false;
            }, 3000);
        },
        openModal(employeeID) {
            this.getEmployeeInfo(employeeID);
            $('#editModalID').modal('show');
        },
        getEmployeeInfo(employeeID){
            axios.get(specificInfoUrl+employeeID)
                .then(response => {
                    this.employeeInfo = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        updateInfo() {
            $('#editModalID').modal('hide');
            this.isLoading = true;

            setTimeout(() => {
                // Send form data using Axios
                axios.post(updateUrl, this.employeeInfo)
                    .then(response => {
                        this.isLoading = false;
                        this.getAllEmployees();
                        this.message = response.data.message;
                        this.messageColor = response.data.status;
                    })
                    .catch(error => {
                        this.isLoading = false;
                        this.message = error.data.message;
                        this.messageColor = error.data.status;
                    });
            });
        },
        confirmDelete(employeeID){
            this.employeeInfo.ID = employeeID;
            this.modalTitle = 'Confirm to delete!';
            $('#deleteModalID').modal('show');
        },
        deleteEmployee(employeeID){
            axios.post(deleteUrl, {ID : employeeID}, {
                headers: {
                    'Content-Type': 'application/json'
                }
            })
                .then(response => {
                    $('#deleteModalID').modal('hide');
                    this.getAllEmployees();
                    this.message = response.data.message;
                    this.messageColor = response.data.status;
                })
                .catch(error => {
                    this.message = error.data.message;
                    this.messageColor = error.data.status;
                });
        }
    }
    ,
    mounted() {
        this.getAllEmployees();
    }
});