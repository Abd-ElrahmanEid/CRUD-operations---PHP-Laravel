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
<h1 class="text-center">All Data about Students  </h1> <br>

@if(session()->has('success'))
    <div class="alert alert-danger " role="alert">
        {{session()->get('success')}}
    </div>
@endif

<div style="margin: auto; width:150px ">
    <a class="btn btn-primary" href="{{url('student/create')}}">Add Student</a>
</div> <br><br>



<section class="container">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First_Name</th>
            <th scope="col">Last_Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Grade</th>
            <th scope="col">View</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>




        </tr>
        </thead>
        <tbody>
        @foreach( $students as $student)
            <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->grade}}</td>
            <td>
                <a href="{{url('student/show/' . $student->id)}}" class="btn btn-primary">View</a>
            </td>

            <td>
                <a href="{{url('student/destroy/' . $student->id)}}" class="btn btn-danger">Delete</a>
            </td>

            <td>
                <a href="{{url('student/edit/' . $student->id)}}" class="btn btn-success">Edit</a>
            </td>


            </tr>
        @endforeach()


        </tbody>
    </table>

</section>

</body>
</html>
