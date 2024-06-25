<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin List</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>id</td>
                <td>first_name</td>
                <td>last_name</td>
                <td>email</td>
                <td>gender</td>
                <td>city_id</td>
                <td>address</td>
                <td>mobile_no</td>
                <td>type</td>
                <td>is_active</td>
                <td>dob</td>
                <td>Action</td>
            </tr>
        </thead>
        <thead>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->first_name }}</td>
                    <td>{{ $admin->last_name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->gender }}</td>
                    <td>{{ $admin->city_id }}</td>
                    <td>{{ $admin->address }}</td>
                    <td>{{ $admin->mobile_no }}</td>
                    <td>{{ $admin->type }}</td>
                    <td>{{ $admin->is_active }}</td>
                    <td>{{ $admin->dob }}</td>
                    <td><a href="{{url('admin/' . $admin->id)}}">view</a></td>
                </tr>
            @endforeach
        </thead>
    </table>
</body>
</html>
