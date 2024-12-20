<script>
    const theme = localStorage.getItem('theme') || 'light';

    {{-- Showing a false positive error because document.documentElement is the HTML tag in app.blade.php --}}
    document.documentElement.dataset.theme = theme;
</script>
