<h1>Login</h1>

<form action="/authenticate" method="POST">
    @csrf
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}"/>

    @error('email')
        <div class="error">{{ $message }}</div>
    @enderror

    <br />

    <label for="password">Password</label>
    <input type="password" id="password" name="password" />

    <br />

    <button type="submit">Submit</button>
</form>