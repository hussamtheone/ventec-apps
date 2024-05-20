<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS (si nécessaire) -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form id="registerForm" class="w-50 bg-white p-4 rounded shadow" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nom" class="form-label">First Name</label>
                <input type="text" class="form-control" name="nom" placeholder="Enter first name">
            </div>
            <div class="form-group mb-3">
                <label for="prenom" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="prenom" placeholder="Enter last name">
            </div>
            <div class="form-group mb-3">
                <label for="registerEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="registerEmail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mb-3">
                <label for="registerPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="registerPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-2">Register</button>
            <button type="button" class="btn btn-secondary w-100"><a href="{{route('login')}}" class="text-white text-decoration-none">Back to Login</a></button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
