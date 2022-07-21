<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea Submission</title>
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
<!--<a class="w3-btn w3-red w3-right w3-round-large" href="{{ URL::to('login') }}">Back</a>-->  

    <div class = "container">
        <div class="col-md-8 mt-5 offset-md-2">
      
        
            <div class="card">
                <div class="card-header">
                    <h1 style="text-align: center;color: red;">Write Your Project Idea</h1>
               <h3>this work is incomplete.</h3>
                </div>
                <div class="card-body">
                    <form method = "post" action="{{ URL::to('store_idea') }}">
                    {{ csrf_field() }}
                    <div class="form-group">   
  <label class="w3-bar w3-red w3-panel w3-padding-16">Name</label>
  <input class="form-control" type="text" name="name[]" placeholder="studentname">
  <input class="form-control" type="text" name="name[]">
  <input class="form-control" type="text" name="name[]">
  <input class="form-control" type="text" name="name[]">
 </div> 
 <div class="form-group">  
  <label class="w3-bar w3-red w3-panel w3-padding-16">ID</label>
  <input class="form-control" type="text" name="stu_id[]">
  <input class="form-control" type="text" name="stu_id[]">
  <input class="form-control" type="text" name="stu_id[]">
  <input class="form-control" type="text" name="stu_id[]">
  <p>
</div> 

<div class="form-group">  
  <label class="w3-bar w3-red w3-panel w3-padding-16">Batch</label>
  <input class="form-control" type="text" name="batch"></p>
  <p>
</div> 

    <div class="form-group">   
   <label class="w3-bar w3-red w3-panel w3-padding-16">Semester</label>
   <input class="form-control" type="text" name="semester"></p>
   </div> 
   <div class="form-group">   
   <label class="w3-bar w3-red w3-panel w3-padding-16">Project Title </label>
   <input class="form-control" type="text" name="p_title"></p>
   </div>
   <div class="form-group">   
   <label class="w3-bar w3-red w3-panel w3-padding-16">Project Idea</label>
   <input class="form-control" type="text" name="p_idea"></p>
   </div>
   



<div class="form-group">  
<input type="submit" class="w3-button w3-round-xxlarge w3-red" value="Submit">
</div>
<!--<div class="w3-bar">
  <a href="insert" class="w3-button w3-hover-purple">&laquo;</a>
  <a class="w3-button w3-hover-green">1/2</a>
  <a href="employees" class="w3-button w3-hover-orange">&raquo;</a>
</div>-->

    </form>
    </div>
    </div>
    </div>
</body>
</html>
</html>

