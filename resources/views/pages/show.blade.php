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

<h1 class="text-center">View Student Data</h1> <br>
<div class="container">

    <div class="alert alert-danger " role="alert">
        ID : {{$student->id}}
        <br>

        First_Name : {{$student->first_name}}
        <br>

        Last_Name : {{$student->last_name}}
        <br>

        Age : {{$student->age}}
        <br>

        Gender : {{$student->gender}}
        <br>

        Grade : {{$student->grade}}
        <br>

    </div>

    <a href="{{url('student/index')}}" class="btn btn-primary">Back</a>


</div>


</body>
</html>
