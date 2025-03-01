@if ($isYourBirthday === true)
    <div class="notification is-info">
        <p>
            <x-icons.icon-component filename="cake2-fill" />
            Happy birthday, {{ auth()->user()->username }}!
        </p>
    </div>
@endif
