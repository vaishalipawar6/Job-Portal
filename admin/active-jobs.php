<?php
include '../db.php';
// Admin Active Jobs Moderation Page (matching thesis Fig. 12 requirements)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Active Job Posts - Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Job Portal - Admin Panel</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
                <a class="nav-link text-light" href="../logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="mb-4">Active Job Posts</h2>
        <p class="text-muted">Monitor all active job openings published by companies and remove outdated or unverified listings.</p>
        
        <div class="card p-4 shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Job Name</th>
                        <th>Company Name</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Google Assistant App Developer</td>
                        <td>Google</td>
                        <td>11-Mar-2020</td>
                        <td><button class="btn btn-sm btn-danger">Delete</button></td>
                    </tr>
                    <tr>
                        <td>Accounts Professionals</td>
                        <td>Tata Consultancy Services (TCS)</td>
                        <td>03-Oct-2017</td>
                        <td><button class="btn btn-sm btn-danger">Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
