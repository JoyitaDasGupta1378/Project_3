<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   
   
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="{{URL::to('teacher')}}" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="{{URL::to('ProjectView')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Project info</a>
    <a href="{{URL::to('logout')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>

  </div>


<div class="w3-container">
  <h2>
      </h2>
<br>
<br>
<br>
  <table class="w3-table-all">
    <thead>
    <tr class="w3-red">
        <th>Project Title</th>
        <th>Description</th>
        <th>Student ID</th>
        <th>Status</th>
        <th>Action</th>

    </tr>
    </thead>
   <tbody>
   @if($projects)
         @foreach($projects as $p)
      <tr>
        <td>{{$p->title}}</td>
        <td>{{$p->description}}</td>
        <td>{{$p->student_id}}</td>
        <td >@if(is_null($p->status) || $p->status==0) Pending @elseif($p->status==1) Accepted @else Rejected @endif</td>

        <td>
          @if($p->status==0)
          <a class="btn btn-primary" id="myBtn" value="accept" href="{{route('pstatus')}}?ptd={{$p->id}}&value=1">Accept</a>
          <a class="btn btn-danger" id="myBtn" value="reject" href="{{route('pstatus')}}?ptd={{$p->id}}&value=2">Reject</a></td>
        @elseif($p->status==1)
        <a class="btn btn-danger" id="myBtn" value="reject" href="{{route('pstatus')}}?ptd={{$p->id}}&value=2">Reject Again</a></td>
        @else 
        <a class="btn btn-primary" id="myBtn" value="accept" href="{{route('pstatus')}}?ptd={{$p->id}}&value=1">Accept Again</a>
        @endif
      </tr>
      @endforeach
      @else
      <tr>
          <td colspan="4" class="text-center">No data found</td>
      </tr>
      @endif
              <script>
                function myFunction() {
                var x = document.getElementById("myBtn").value;
                document.getElementById("demo").innerHTML = x;
              }
        </script>


    
</tbody>
</table>
</div>

</body>
</html> 


    </div>
    </div>
    </div>
</body>
</html>
</html>

