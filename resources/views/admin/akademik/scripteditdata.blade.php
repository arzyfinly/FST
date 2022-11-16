<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#editSecretary").on('submit', function(event){
            event.preventDefault();
            $(".preloader").fadeIn();
            let id = $('#id').val();
            // let id = e.getAttribute('data-id');
            let formData = new FormData(this);
                $.ajax({
                    url: "http://backend.smk1sumenep.sch.id/api/secretaries/"+id,
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
                                showConfirmButton: false,
                                timer: 1250,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                },
                                toast: true,
                                position: 'top-right'
                            }).then((result) => {
                                // Reload the Page
                                location.href = '/secretaries';
                            })
                            $("#" + id + "").remove(); // you can add name div to remove
                        },
                    error: function(response){   
                        // console.log(response);                     
                            Swal.fire({
                                icon: 'error',
                                title: response.message,
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                },
                                toast: true,
                                position: 'top-right'
                            }).then((result) => {
                                // Reload the Page
                                // location.reload();
                            })
                            $("#" + id + "").remove();
                    }
                    });
                });
            });
</script>