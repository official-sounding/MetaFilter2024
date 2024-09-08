<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelectorAll('#contents'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('contents', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
