@if ($errors->any())
    <div class="notification is-danger" role="alert">
        <p>
            <span class="icon">
                <img src="{{ asset('images/icons/exclamation-triangle-fill.svg') }}" alt="">
            </span>
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
