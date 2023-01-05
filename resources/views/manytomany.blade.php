<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>User Details  <a href="{{url('/create')}}" class="btn btn-primary float-end">Form</a></h1>
    <table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Contery Name</th>
      <th>Id</th>
      <th>User Name</th>
      <th>User Email</th>
      <th>User Password</th>
      <th>Id</th>
      <th>Posts Name</th>
     
    </tr>
  </thead>
  <tbody>
    @if($countries->count())
  @foreach($countries  as $country)
  @foreach($users  as $user)
  @foreach($posts  as $post)
    <tr>
    <td>{{ $loop->iteration ?? ''}}</td>
    <td>{{ $country->name ?? ''}}</td>
    <td>{{ $loop->iteration ?? ''}}</td>   
    <td>{{ $user->name ?? ''}}</td> 
    <td>{{ $user->email ?? ''}}</td> 
    <td>{{ $user->password ?? ''}}</td> 
    <td>{{ $loop->iteration ?? ''}}</td>
    <td>{{ $post->name ?? ''}}</td> 
    </tr>
    @endforeach
    @endforeach
    @endforeach
    @endif
  </tbody>
</table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>