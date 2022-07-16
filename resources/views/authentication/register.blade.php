<h1>Register</h1>

<form action="/save-user" method="POST">
    @csrf

    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" />

    @error('name')
        <span class="error">{{ $errors->first('name') }}</span>
    @enderror

    <br />

    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" />

    @error('email')
        <span class="error">{{ $errors->first('email') }}</span>
    @enderror

    <br />

    <label for="password">Password</label>
    <input type="password" id="password" name="password" />

    @error('password')
        <span class="error">{{ $errors->first('password') }}</span>
    @enderror

    <br />

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" />

    <br />

    <button type="submit">Submit</button>
</form>