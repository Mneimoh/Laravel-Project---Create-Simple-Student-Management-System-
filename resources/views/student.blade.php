<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{'css/style.css'}}">

    <title>Student management system</title>
  </head>
  <body>
    @include('navbar')  
    <div class="row header-container justify-content-center">
      <div class="header">
        <h1>Student Management System</h1>
      </div>
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
          <div class="container-fluid mt-4">
            <div class="row justify-content-center">
              <section class="col-md-7">
                  @include('studentslist')
              </section>
            </div>
          </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
          <div class="row">
            <section class="col-md-7">
                @include('studentslist')
            </section>
            <section class="col-md-5">

              <div class="card mb-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBB6pmhavMmSq5AMFrQnMSqQuRMpJFaPqfrg&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Enter the informations of the new student</h5>
                  <form action="{{ url('/store') }}" method="get">
                @csrf
                <div class="form-group">
                  <label class="form-label">CNE</label>
                  <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                </div>
                <div class="form-group">
                  <label class="form-label">First Name</label>
                  <input name="firstName" type="text" class="form-control" placeholder="Enter the First Name">
                </div>
                <div class="form-group">
                  <label class="form-label">Second Name</label>
                  <input name="secondName" type="text" class="form-control" placeholder="Enter the Second Name">
                </div>
                <div class="form-group">
                  <label class="form-label">Age</label>
                  <input name="age" type="text" class="form-control" placeholder="Enter Age">
                </div>
                <div class="form-group">
                  <label class="form-label">Speciality</label>
                  <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                </div>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-warning" value="Reset">
              </form>
                </div>
              </div>
            </section>
          </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
          <div class="row">
            <section class="col">
                @include('studentslist')
            </section>
            <section class="col"></section>
          </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
          <div class="row">
            <section class="col-md-7">
                @include('studentslist')
            </section>
            <section class="col-md-5">

              <div class="card mb-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBB6pmhavMmSq5AMFrQnMSqQuRMpJFaPqfrg&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Update informations of student</h5>
                  <form action="{{ url('/update/'.$student->id) }}" method="get">
                @csrf
                <div class="form-group">
                  <label class="form-label">CNE</label>
                  <input value="{{ $student->cne }}" name="cne" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label class="form-label">First Name</label>
                  <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label class="form-label">Second Name</label>
                  <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label class="form-label">Age</label>
                  <input value="{{ $student->age }}" name="age" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label class="form-label">Speciality</label>
                  <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control">
                </div>
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
              </form>
                </div>
              </div>

            </section>
          </div>
        </div>
    @endif

    <footer>
      
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>