<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Available Jobs - Job Portal</title>
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

    <div class="container my-5">
        <h2 class="mb-4">Latest Job Openings</h2>
        <div class="list-group">
            <div class="list-group-item list-group-item-action p-4 mb-3 shadow-sm">
                <h5>Google Assistant App Developer</h5>
                <p class="text-muted mb-1">Google | Bengaluru | Experience: 2 Years</p>
                <p class="mb-2">Rs. 50,000 / Month</p>
                <a href="login.php" class="btn btn-sm btn-outline-success">Apply Now</a>
            </div>
        </div>
    </div>
</body>
</html>
