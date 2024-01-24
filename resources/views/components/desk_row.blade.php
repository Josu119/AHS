@props(['desk'])

<tr>
    <td>{{ 'Desk ' . $desk->desk_number }}</td>
    <td>
        @if ($desk->is_available === 1)
        <span class="status available">Available</span>
        @elseif ($desk->is_available === 0)
        <span class="status pending">Booked</span>
        @endif
    </td>
    <td>
        @if ($desk->is_out_of_order === 0)
        <span class="status cancelled">Disable</span>
        @elseif ($desk->is_out_of_order === 1)
        <span class="status available">Enable</span>
        @endif
    </td>
</tr>
