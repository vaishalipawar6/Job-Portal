<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - Job Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="index.php">Job Portal</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="jobs.php">Jobs</a>
                <a class="nav-link" href="login.php">Login</a>
                <a class="nav-link active" href="sign-up.php">Sign Up</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5" style="max-width: 500px;">
        <h2 class="text-center mb-4">Create an Account</h2>
        <div class="row text-center mb-4">
            <div class="col">
                <div class="card p-3 shadow-sm">
                    <h4>User Registration</h4>
                    <p class="text-muted small">Looking for a job? Register here.</p>
                    <a href="login.php" class="btn btn-outline-success btn-sm">Register as User</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3 shadow-sm">
                    <h4>Company Registration</h4>
                    <p class="text-muted small">Hiring? Register your company.</p>
                    <a href="login.php" class="btn btn-outline-primary btn-sm">Register as Company</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
