
<script>
    ClassicEditor
        .create(document.querySelector('#contents'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('contents', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>

