

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>RegisterEdit</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
            <form action="" method="POST">
                @csrf 
        
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$Register->name}}"> </div>

                    <div class="mb-3">
                    <label for="mobile_number" class="form-label">Mobile number</label>
                    <input type="number" class="form-control" id="mobile_number" name="mobile number" value="{{$Register->mobile_number}}"> </div>
                   
                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$Register->email}}"> </div>
                    
                    <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="{{$Register->password}}"> </div>
                   
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="text" class="form-control" id="Confirm_password" name="Confirm_password" value="{{$Register->Confirm_password}}"> </div>

                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
            @if(session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
</div>
@endif
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
