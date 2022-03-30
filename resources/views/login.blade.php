<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar Role</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-md-center">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('do_login') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="form-group text-right">
                <button class="btn btn-success">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>