@props(['user'])

<tr>
    <td>{{ $user->username }}</td>

    <td>{{ $user->first_name . ' ' . $user->last_name }}</td>

    <td>{{ $user->email }}</td>

    <td>
        <span class="status cancelled">Delete</span>
        @if ($user->is_approved === 0)
        <span class="status available">Approve</span>
        @endif
    </td>
</tr>
