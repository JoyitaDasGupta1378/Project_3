<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
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
    <div class = "container">
        <div class="col-md-8 mt-5 offset-md-2">
        @if(Session::get('msg'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{Session::get('msg')}}</strong>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                <h1 style="text-align: center;color: red;">Write Your Project Info</h1>
                </div>
                <div class="card-body">
                    <form method = "post" action="{{ URL::to('store_project') }}">
                    {{ csrf_field() }}
                    <div class="form-group">   
                    <!--<label class="w3-bar w3-red w3-panel w3-padding-16">Team ID</label>-->
                        <input class="form-control" type="text" name="title" placeholder="Title">

                    </div> 
                    <div class="form-group">   
                    <!--<label class="w3-bar w3-red w3-panel w3-padding-16">User ID</label>-->
                        <input class="form-control" type="text" name="description" placeholder="Description">

                    </div> 
                    <div class="form-group">   
                    <!--<label class="w3-bar w3-red w3-panel w3-padding-16">User ID</label>-->
                        <input class="form-control" type="text" id="numberOfMembers" name="numberOfMembers" placeholder="Number of Members">
                    </div>
                    <div id="multiStd">
                        <!-- <div id="std" class="form-group"> -->
                            <!-- <select class="form-control" id="students"> -->
                                <!-- <option>1</option> -->
                                <!-- </select> -->
                        <!-- </div> -->
                    </div>
                    <div class="form-group">  
                        <input type="submit" class="w3-button w3-round-xxlarge w3-red" value="Submit">
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
    <script>
         jQuery(document).ready(function(){
            
            jQuery('#multiStd').hide();
            jQuery('#numberOfMembers').change(function(){
                var stdNo = jQuery('#numberOfMembers').val();
                jQuery.ajax({
                    url: "{{ url('/getUserInfo') }}",
                    method: 'get',
                    data: {
                    },
                    success: function(data){
                        jQuery('#multiStd').show();
                        var abc = '';
                        for(var j=0; j < stdNo ;j++){
                            abc += '<div id="std" class="form-group"><select class="form-control" name="student_id[]" id="students"><option value="">Select a student</option>';
                            // var str = " ";
                            for(var i=0; i < data.data.length ;i++){
                                // console.log(data.data[i].id+" "+data.data[i].name);
                                abc += '<option value="'+data.data[i].id+'">'+data.data[i].name+'</option>';
                            }
                            abc += '</select></div>';
                        }
                        jQuery('#multiStd').html(abc);
                    }
                });
            });
        });
      </script>
</body>
</html>
</html>

