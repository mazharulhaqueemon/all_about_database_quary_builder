<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1> All users List</h1>
                <a href="/newstudent" class="btn btn-success mb-3">Add New User</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                @foreach ($data as $id =>$student )
                    <tr>
                        <td> {{$student->id}} </td>
                        <td>{{ $student->name}}</td>
                        <td>{{ $student->email}}</td>
                        <td>{{ $student->age}}</td>
                        <td>{{ $student->city}}</td>
                        <td><a href=" {{route('students.single',$student->id)}} " class="btn btn-primary btn-sm" >View</a> </td>
                        <td><a href=" {{route('students.delete',$student->id)}} " class="btn btn-danger btn-sm" >Delete</a> </td>
                        <td><a href=" {{ route('students.update.page',$student->id) }} " class="btn btn-warning btn-sm" >Update</a> </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>


</body>
</html>






