<h1>Register</h1>

<form action="/save-user" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" />

    <label for="email">Email</label>
    <input type="email" id="email" name="email" />

    <label for="password">Password</label>
    <input type="password" id="password" name="password" />

    <button type="submit">Submit</button>
</form>