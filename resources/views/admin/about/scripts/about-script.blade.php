<script src="{{ asset('black-template') }}/vendors/dropify/dropify.min.js"></script>
<script>
    //dropify //
    $(document).ready(function() {
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

        //notifacations//
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

    });

    //upload PDF //
    (function($) {
        'use strict';
        $(function() {
            $('.file-upload-browse').on('click', function() {
                var file = $(this).parent().parent().parent().find('.file-upload-default');
                file.trigger('click');
            });
            $('.file-upload-default').on('change', function() {
                $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i,
                    ''));
            });
        });
    })(jQuery);
</script>
