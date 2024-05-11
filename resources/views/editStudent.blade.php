<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg" style="margin-top: 5rem;">
    <form class="row g-3" action="" method="POST">
        @csrf
        <div class="col-md-6">
          <label for="fname" class="form-label">First Name</label>
          <input type="name" class="form-control" id="fname" name="fname" value="{{$student->fname}}" required>
        </div>
        <div class="col-md-6">
          <label for="lname" class="form-label">Last Name</label>
          <input type="name" class="form-control" id="lname" name="lname" value="{{$student->lname}}" required>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{$student->address}}" required>
        </div>
        <div class="col-md-6">
            <label for="bdate" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="bdate" name="bdate" value="{{$student->birthdate}}" required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity" name="city" value="{{$student->city}}" required>
        </div>
        <div class="col-md-4">
          <label for="province" class="form-label">Province</label>
          <input type="text" class="form-control" id="province" name="province" value="{{$student->province}}" required>
        </div>
        <div class="col-12">
           <button type="submit">Update</button>
            <a class="btn btn-secondary" href="/dashboard" role="button">Back</a>
        </div>
      </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
