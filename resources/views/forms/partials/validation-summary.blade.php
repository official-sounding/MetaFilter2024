@if ($errors->any())
    <div class="notification is-danger" role="alert">
        <p>
            Sorry, there @if ($errors->count() > 1) are some issues @else is an issue @endif with your form.
        </p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
