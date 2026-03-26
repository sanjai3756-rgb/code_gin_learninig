<form action="/users" method="POST">
    @csrf

    Name: <input type="text" name="name"><br>
    Description: <textarea name="description"></textarea><br>
    Age: <input type="number" name="age"><br>
    Status: <input type="checkbox" name="status" value="1"><br>
    Birthdate: <input type="date" name="birthdate"><br>

    <button type="submit">Save</button>
</form>
