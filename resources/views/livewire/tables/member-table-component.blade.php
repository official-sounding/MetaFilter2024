<div>
    @if (isset($members) && $members->count() > 0)
        <table>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>member</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        @include('notifications.none-listed', [
            'records' => 'members'
        ])
    @endif
</div>
