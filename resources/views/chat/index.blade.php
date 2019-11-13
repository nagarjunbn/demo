<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<h1>Chat</h1>
<p>Available Users</p>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}
            <td>
                <button class="select-user-button" data-userID="{{$user->id}}" data-userName="{{$user->name}}"
                        data-userEmail="{{$user->email}}">
                    Select User
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<script>
    $('.select-user-button').click(function (event) {
        console.log('here');
        // console.log($(this).attr("data-userID"));
        console.log($(this).data('userID'));
        console.log($(this).data('userName'));
        console.log($(this).data('userEmail'));
    });
</script>
<script type="text/javascript">
    var conn = new WebSocket('ws://laravel.local:9000');
    conn.onopen = function (e) {
        console.log("Connection established!");
        conn.send('Hello World!');
    };

    conn.onmessage = function (e) {
        console.log(e.data);
    };
</script>
</body>
</html>
