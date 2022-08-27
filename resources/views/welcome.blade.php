<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <div class="row">
        <div class="container" style="padding-top: 10%;">
         <!-- model -->
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Add Data
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post">
        @csrf
      <div class="modal-body">
        <label for="name">Name</label>
        <input type="text" placeholder="Enter Name" class="form-control" name="name">
        <label for="email">Email</label>
        <input type="email" placeholder="Enter Your Email" class="form-control" name="email">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
         <!-- end model -->
         @if (session()->has('add'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>{{session('add')}}</strong> 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif
         @if (session()->has('update'))
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>{{session('update')}}</strong> 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif
         @if (session()->has('delete'))
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>{{session('delete')}}</strong> 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif
        </div>
    </div>
 </div>   
<table class="table table-hover" border="1%" width="50%">
<thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Actions</th>
    </tr>
</thead>
@foreach ($datas as $data)
<tbody>
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>
            <a href="{{url('/edit',$data->id)}}" class="btn btn-warning">Edite</a>
            <a href="{{url('/delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
        </td>

    </tr>
</tbody>
@endforeach
</table>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>