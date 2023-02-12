<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<h1 class="text-center">Add New Student</h1> <br>


<div class="container">
    <form action="{{url('student/store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="first_name">First_Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name"  aria-describedby="emailHelp" placeholder="Enter Your First_Name">
            @error('first_name')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div><br>

        <div class="form-group">
            <label for="last_name">Last_Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name"  aria-describedby="emailHelp" placeholder="Enter Your Last_Name">
            @error('last_name')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div><br>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age"  aria-describedby="emailHelp" placeholder="Enter Your Age">
            @error('age')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div><br>

        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender"  aria-describedby="emailHelp" placeholder="Enter Your Gender">
            @error('gender')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div><br>

        <div class="form-group">
            <label for="grade">Grade</label>
            <input type="text" class="form-control" id="grade" name="grade"  aria-describedby="emailHelp" placeholder="Enter Your Grade ">
            @error('grade')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div> <br>

        <button type="submit" class="btn btn-primary px-2 px-5">
            Submit
        </button>

    </form>
</div>

</body>
</html>
