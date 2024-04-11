<script src="{{ asset('black-template') }}/vendors/sweet-alert/sweetalert.min.js"></script>
<script src="{{ asset('black-template') }}/vendors/dropify/dropify.min.js"></script>
<script>
    $(document).ready(function() {
        //dropify //
        $('.dropify').dropify();

        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })

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
                let route = "{{ route('jobs.destroy', '__id__') }}";
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
<script src="{{ asset('black-template') }}/js/plugins/dataTables.min.js"></script>
<script>
    (function($) {
        'use strict';
        $(function() {
            $('#order-listing').DataTable({
                "aLengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ],
                "iDisplayLength": 5,
                "language": {
                    search: ""
                }
            });
            $('#order-listing').each(function() {
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find(
                    'div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.removeClass('form-control-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find(
                    'div[id$=_length] select');
                length_sel.removeClass('form-control-sm');
            });
        });
    })(jQuery);
</script>

