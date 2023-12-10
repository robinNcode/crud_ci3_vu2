let createURL = baseUrl + 'api/employee/store';

let app = new Vue({
    el: '#app',
    data: {
        loading: false,
        message: '',
        messageColor: '',
        formData: {
            name: '',
            email: '',
            phone: '',
            salary: '',
            address: ''
        }
    },
    methods: {
        submitForm() {
            // Show loader when making the request
            this.loading = true;

            setTimeout(() => {
                // Send form data using Axios
                axios.post(createURL, this.formData, {
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                    .then(response => {
                        this.loading = false;
                        this.message = response.data.message;
                        this.messageColor = response.data.status;
                        this.$ref.employeeAddForm.reset();
                    })
                    .catch(error => {
                        this.loading = false;
                        this.message = error.data.message;
                        this.messageColor = error.data.status;
                        this.$ref.employeeAddForm.reset();
                    });
            }, 3000);
        }
    }
});