<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Portal - One Search, Global Reach</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="index.php">Job Portal</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="jobs.php">Jobs</a>
                <a class="nav-link" href="login.php">Login</a>
                <a class="nav-link" href="sign-up.php">Sign Up</a>
            </div>
        </div>
    </nav>

    <div class="container text-center my-5">
        <h1 class="display-4">Find Your Dream Job Today</h1>
        <p class="lead">Connecting talented candidates with top employers seamlessly.</p>
        <a href="jobs.php" class="btn btn-success btn-lg mt-3">Search Jobs</a>
    </div>
</body>
</html>
