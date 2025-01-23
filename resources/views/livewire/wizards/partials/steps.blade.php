<ol class="steps">
    @foreach($steps as $step)
        <li>
            {{ trans($step) }}
        </li>
    @endforeach
</ol>
