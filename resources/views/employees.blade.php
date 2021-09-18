<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Employee List</title>
</head>
<style>
    body {
  background-color: lightyellow;
}
</style>
<body>

<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
  <b class="navbar-brand">Employees</b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('create-employee')}}">Create Employee</a>
      </li>
    </ul>
  </div>  
</nav>
        
    
<div class="container" style="margin-top:30px">
        <table id="table" class="table table-striped table-primary" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>salary</th>
                    <th>Birthday</th>
                    <th>Department</th>
                    <th>Gender</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->name }}</td>
                    <td>{{ $e->email }}</td>
                    <td>{{ $e->salary }}</td>
                    <td>{{ $e->birthday }}</td>
                    <td>{{ $e->department }}</td>
                    <td>{{ $e->gender }}</td>
                    <td>{{ $e->is_active }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{URL::to ('edit-employee/'.$e->id)}}">Edit</a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal" href="#">Delete</a>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to want delete?
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-danger" href="{{URL::to ('delete-employee/'.$e->id)}}">Yes</a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

    </div>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
   
</body>


</html>