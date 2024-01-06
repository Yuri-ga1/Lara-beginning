@extends('app')

@section('content')
    <h1>Welcome to my first Laravel project v1.0!</h1>

    <div style="display: flex;">
        <form action="{{ route('form') }}" style="margin-right: 10px;" method="get">
            <button type="submit">Create new form</button>
        </form>

        <form action="{{ route('data.table') }}" method="get">
            <button type="submit">Look at created forms</button>
        </form>
    </div>

    @if(session('success'))
        <div style="color: green; margin-top:20px; font-size: 20px">
            {{ session('success') }}
        </div>
    @endif
@endsection