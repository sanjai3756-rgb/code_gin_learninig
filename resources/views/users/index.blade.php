<a href="/users/create">Add User</a>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->age }}</td>
        <td>
            <a href="/users/{{ $user->id }}/edit">Edit</a>

            <form action="/users/{{ $user->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>