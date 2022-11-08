<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
        <div class="card">
            <div class="card-body">
                <form  method="post" action="{{route('add-employee')}}" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" name="name"  class="form-control"  >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">email</label>
                        <input type="email" name="email"class="form-control" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                        <input type="tel" name="phone" class="form-control">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
    

      </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>