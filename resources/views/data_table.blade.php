@extends('app')

@section('content')
    <h1>Data table</h1>

    <table border="1">
        <tr>
            <th>User Name</th>
            <th>User Email</th>
        </tr>
        @foreach($data as $item)
            <tr>
                <td>{{ $item['userName'] }}</td>
                <td>{{ $item['userEmail'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
