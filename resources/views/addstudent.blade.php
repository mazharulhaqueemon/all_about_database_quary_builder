<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New Student</h1>
                <form action="{{ route('studnets.add') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name"  class="form-label">Name</label>
                        <input type="text" value="{{old('name')}}" class="form-control" id="name" name="name">
                         <span>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{old('email')}}" class="form-control" id="email" name="email">
                         <span>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age">
                         <span>
                            @error('age')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" >
                         <span>
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Student</button>
            </div>
        </div>
    </div>

</body>
</html>
