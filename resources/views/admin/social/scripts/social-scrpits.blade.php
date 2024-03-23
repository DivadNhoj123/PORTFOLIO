<script src="{{ asset('black-template') }}/vendors/sweet-alert/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        function showNotification(from, align, type, message) {
            $.notify({
                icon: "tim-icons icon-bell-55",
                message: message

            }, {
                type: type,
                timer: 8000,
                placement: {
                    from: from,
                    align: align
                }
            });
        }

        @if (session()->has('notification'))
            var notificationMessage = '{{ session('notification') }}';
            showNotification('top', 'center', 'success', notificationMessage);
            console.log(notificationMessage);
        @endif

        $('#add-form').submit(function(event) {

        });

        $('#edit-form').submit(function(event) {});
    });

    $('.delete').on('click', function() {
        let $this = $(this);
        let deleteId = $this.data('id');

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3f51b5',
            cancelButtonColor: '#ff4081',
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
            buttons: {
                cancel: {
                    visible: true,
                    className: "btn btn-danger",
                },
                confirm: {
                    className: "btn btn-primary",
                }
            }
        }).then((confirmed) => {
            if (confirmed) {
                let route = "{{ route('social.destroy', '__id__') }}";
                route = route.replace('__id__', deleteId);

                $.ajax({
                    url: route,
                    type: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function(data) {
                        swal({
                            title: 'Deleted!',
                            text: 'Your data has been deleted successfully.',
                            icon: 'success',
                            button: 'OK',
                        }).then(() => {
                            location.reload(true); // Corrected reload statement
                        });
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        console.error(xhr.responseText);
                    }
                });
            } else {
                swal({
                    title: 'Cancelled',
                    text: 'Your data is safe.',
                    icon: 'info',
                    button: 'OK',
                });
            }
        });
    });
</script>
