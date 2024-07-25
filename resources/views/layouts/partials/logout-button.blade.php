<form method="POST" class="logout-form" action="{{ route('logout') }}">
    @csrf

    <button type="submit" class="logout-button">
        <span class="icon-logout">
            Log Out
        </span>
    </button>
</form>
