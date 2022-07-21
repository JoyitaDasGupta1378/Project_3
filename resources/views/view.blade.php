<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Name</title>
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
@include('include.nav')
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
        <th>Team member's ID</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <div hidden> {{ $flag = 0 }} </div>
      @foreach($data['student_id'] as $std_id)
        <tr>
          @if($flag == 0)
          <td rowspan="{{ $data['iteration'] }}">{{$data['title']}}</td>
          <td rowspan="{{ $data['iteration'] }}">{{$data['description']}}</td>
          @endif
          <td>{{ $std_id }}</td>
          @if($flag == 0)
            <td rowspan="{{ $data['iteration'] }}">@if(is_null($data['status']) || $data['status']==0) Pending @elseif($data['status']==1) Accepted @else Rejected @endif</td>
            <td rowspan="{{ $data['iteration'] }}"><button class="btn btn-warning">Edit</button></td>
            <td rowspan="{{ $data['iteration'] }}"><button class="btn btn-danger">Delete</button></td>
          @endif
          <div hidden>{{ $flag++ }}</div>
        </tr>
      @endforeach
       
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

