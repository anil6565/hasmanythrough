<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User</title>
  </head>
  <body>
  <div class="contaner mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> User Form
                        <a href="{{url('country')}}" class="btn btn-primary float-end">User Data</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('country')}}" method="POST">
                    @csrf
                       
                       
                        </div>
                        <h4>Country Name</h4>
                        <div class="mb-3">
                            <label>Country Name</label>
                            <input type="text" name="country_name" class="form-control ">
                        </div>
                        <h4>User Details</h4>
                        <div class="mb-3">
                            <label> Name</label>
                            <input type="text" name="name" class="form-control ">
                        </div>
                        <div class="mb-3">
                            <label> Email</label>
                            <input type="email" name="email" class="form-control ">
                        </div>
                        <div class="mb-3">
                            <label> Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                    
                        <h4>Posts Name</h4>
                        <div class="mb-3">
                            <label>Posts Name</label>
                            <input type="text" name="post_name" class="form-control ">
                        </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>