<tbody>
    @foreach ($records as $record)
        <tr>
            @foreach ($columns as $column)
                <td>
                    {{ $record[$column['key']] }}
                </td>
            @endforeach
        </tr>
    @endforeach
</tbody>
