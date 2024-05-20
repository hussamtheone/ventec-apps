<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 1rem;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="nav-logo">
            <a href="#">Logo</a>
        </div>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="demande.html">Demande</a>
            <a href="about.html">Contact Us</a>
        </div>
    </nav>

    <div class="content">
        <h1>Welcome to our website</h1>
        <p>This is the home page content.</p>
    </div>

</body>
</html>
