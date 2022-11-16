<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script>
$(document).ready(function () {
$("#createAttendances").on('submit', function(event){
    
    event.preventDefault();
    let formData = new FormData(this);
            $.ajax({
                url: "http://backend.smk1sumenep.sch.id/api/attendances",
                type: "POST",
                headers: {
                    'Accept':'*/*',
                    'Authorization':'Bearer '+ getCookie('token'),
                },
                data: formData, 
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                        // console.log(response);
                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                                toast: true,
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                },
                                position: 'top-right'
                            }).then((result) => {
                                // Reload the Page
                                location.href = '/attendances';
                            })
                        },
                error: function(response, error){   
                    // var err = eval("(" + xhr.response.message")");
                    // console.log(response.responseJSON);                     
                        swal.fire({
                            icon: 'error',
                            title: response.responseJSON.message,
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            },
                            toast: true,
                            position: 'top-right'
                        })
                }
            });
        });
});
</script>