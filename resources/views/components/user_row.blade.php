@props(['user'])

<tr>
    <td>{{ $user->username }}</td>

    <td>{{ $user->first_name . ' ' . $user->last_name }}</td>

    <td>{{ $user->email }}</td>

    <td>
        <a href="/users/{{ $user->id }}/edit">
            <span class="status bg-cautionYellow !text-black">Edit</span>
        </a>
        {{-- <span class="status cancelled">Delete</span> --}}
        <form method="POST" action="/users/{{ $user->id }}" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button class="status bg-dangerRed !text-white">Delete</button>
        </form>
        <form method="POST" action="/users/{{ $user->id }}" style="display: inline-block">
            @csrf
            @method('PUT')
            @if ($user->is_approved === 0)
                <button class="status available">Approve</button>
            @elseif ($user->is_approved === 1)
                <button class="status bg-orange-700">Put On Hold</button>
            @endif
        </form>
    </td>
</tr>
