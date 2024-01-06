@extends('app')

@section('content')
    <h1>Create new form</h1>

    <form action="{{ route('post.data') }}" class="form-style" method="post">
        @csrf
        <label for="userName">Your name:</label>
        <input type="text" name="userName" value="{{ old('userName') }}">
        @error('userName')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="userEmail">Your email:</label>
        <input type="email" name="userEmail" value="{{ old('userEmail') }}">
        @error('userEmail')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Send</button>
    </form>
@endsection