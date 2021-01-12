<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User List</title>
    <style>

        .wrapper {
            width: 100%;
        }

        .thead-dark {
            background-color: skyblue;
            color: black;
        }

        th, td {
            font-size: 12px;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>

<body>

<h2 class="text-center">User Data</h2>
<div class="wrapper">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Date of birth</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->dob}}</td>
            </tr>
        @endforeach
        </tbody>
    </table
</div>


</body>

</html>
