@props(['name', 'value' => '', 'config' => []])

<textarea
    id="{{ $name }}"
    name="{{ $name }}"
    class="form-control @error($name) is-invalid @enderror"
    {!! $attributes !!}
>{{ old($name, $value) }}</textarea>

@error($name)
    <span class="invalid-feedback d-block">{{ $message }}</span>
@enderror

<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const defaultConfig = {
            height: 400,
            toolbar: [
                { name: 'styles', items: ['Styles', 'Format'] },
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
                '/',
                { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
                { name: 'insert', items: ['Image', 'Link'] },
                '/',
                { name: 'document', items: ['Source'] }
            ],
            contentsCss: '{{ asset("css/editor.css") }}',
        };

        const config = Object.assign(defaultConfig, @json($config));

        if (CKEDITOR.instances['{{ $name }}']) {
            CKEDITOR.instances['{{ $name }}'].destroy(true);
        }

        CKEDITOR.replace('{{ $name }}', config);
    });
</script>
