<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
        }
    }
</script>
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
