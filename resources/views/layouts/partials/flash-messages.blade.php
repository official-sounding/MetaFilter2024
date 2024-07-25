@if (session('error'))
    <div class="notification is-danger">
        <p>{{ session('error') }}</p>
    </div>
@endif

@if (session('message'))
    <div class="notification is-info">
        <p>{{ session('message') }}</p>
    </div>
@endif

@if (session('success'))
    <div class="notification is-success">
        <p>{{ session('success') }}</p>
    </div>
@endif
