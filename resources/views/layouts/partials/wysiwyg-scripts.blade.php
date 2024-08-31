<!--suppress JSCheckFunctionSignatures -->
{{--
<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
        }
    }
</script>
--}}
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#wysiwyg'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('message', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>

{{--
<script type="module">
    import {Bold, ClassicEditor, Essentials, Italic, Paragraph,} from 'ckeditor5';

    ClassicEditor
        .create(document.getElementById('wysiwyg'), {
            plugins: [
                Essentials,
                Paragraph,
                Bold,
                Italic,
            ],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic',
            ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>
--}}
