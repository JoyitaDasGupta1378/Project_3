<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Document</title>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
  
</head>
<body>
    <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="{{URL::to('teacher')}}" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="{{URL::to('allStu')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Students info</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Project info</a>
    <a href="{{URL::to('logout')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>

    <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Link 4</a>-->
  </div>




<div class="container-sm p-5 my-5 ">
 @if(Session::get('msg'))
        <div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <strong>{{Session::get('msg')}}</strong>
             </div>
             @endif 
    <table class="table table-bordered text-black">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th></th>
        
    </thead>
    <tbody>
        @if($students)
         @foreach($students as $s)
      <tr>
        <td>{{$s->id}}</td> 
        <td>{{$s->name}}</td>
        <td>{{$s->email}}</td>
        <td>{{$s->gender}}</td>
        <td>{{$s->dob}}</td>
        <td>
        <a class="btn btn-danger" href="{{ URL::to('/delete-student/'.$s->id) }}">delete</a>
        
      </tr>
      @endforeach
      @else
      <tr>
          <td colspan="4" class="text-center">No data found</td>
      </tr>
      @endif
    </tbody>
  </table>
</div>
</div>
</div>
</body>
</html>
     
       