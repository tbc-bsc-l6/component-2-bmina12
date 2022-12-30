<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>
    <h1>Register Now</h1>
    <form action="{{url('/')}}/form" method="post">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="">Enter Your Name: </label>
                <input type="text" name="name" placeholder="Enter your Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Enter Your Email: </label>
                <input type="text" name="email" placeholder="Enter your Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Enter Your Password: </label>
                <input type="password" name="password" placeholder="Enter your Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Confirm Password: </label>
                <input type="password" name="password_confirmation" placeholder="Enter your Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Enter your DOB: </label>
                <input type="date" name="dob" placeholder="Enter your Name" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Enter your Address: </label>
                <input type="text" name="address" placeholder="Enter your Name" class="form-control">
            </div>

            <button>Submit</button>
        </div>
    </form>
</body>

</html>