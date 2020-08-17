<script>
    window.Baslat = {
        version: '{{ baslat_version() }}',
        csrfToken: '{{ csrf_token() }}',
        baseUrl: '{{ url('/') }}',
        langs: {},
        data: {},
        errors: {},
        selectize: {},
    };

    Baslat.langs['admin::admin.buttons.delete'] = '{{ trans('admin::admin.buttons.delete') }}';
    Baslat.langs['media::media.file_manager.title'] = '{{ trans('media::media.file_manager.title') }}';
    Baslat.langs['media::messages.image_has_been_added'] = '{{ trans('media::messages.image_has_been_added') }}';
</script>

@stack('globals')

@routes
