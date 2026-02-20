@php
    $id = $getId();
    $statePath = $getStatePath();
@endphp

<div x-data="{ id: @js($id) }" class="fi-fo-field-wrp">
    <div class="tinymce-wrapper">
        <textarea
            id="{{ $id }}"
            wire:model.defer="{{ $statePath }}"
            class="tinymce-editor"
        >{{ $getState() }}</textarea>
    </div>
</div>

@assets
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js"></script>
@endassets

@script
<script>
    document.addEventListener('DOMContentLoaded', function() {
        tinymce.init({
            selector: '#{{ $id }}',
            license_key: 'gpl',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | formatselect | bold italic underline strikethrough | link image media table | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
            menubar: 'file edit view insert format tools table help',
            height: 400,
            promotion: false,
            branding: false,
            content_css: false,
            setup: function(editor) {
                editor.on('change', function() {
                    let value = editor.getContent();
                    window.livewire.find(document.querySelector('[wire\\:id]').getAttribute('wire:id')).set(@js($statePath), value);
                });
            }
        });
    });
</script>
@endscript

<style>
    .tinymce-wrapper {
        position: relative;
        margin-top: 0.5rem;
    }

    .tinymce-wrapper .tox-tinymce {
        border-radius: 0.375rem;
    }

    .fi-fo-field-wrp {
        margin-top: 1rem;
    }
</style>

