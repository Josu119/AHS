@props(['user'])

<tr>
    <td>
        <p>{{ $user->first_name . ' ' . $user->last_name }}</p>
    </td>
    <td>{{ $user->email }}</td>
    <td>
        @if ($user->is_approved === 0)
        <span class="status available">Approve</span>
        @elseif ($user->is_approved === 1)
        <span class="status cancelled">Delete</span>
        @endif
    </td>
</tr>
