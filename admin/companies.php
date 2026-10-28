<?php
include '../db.php';
// Admin Company Verification Page (matching thesis Fig. 13 requirements)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Companies - Admin Panel</title>
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
        <h2 class="mb-4">Company Registrations & Verification</h2>
        <p class="text-muted">Review registered companies, verify genuine organizations, and update their activation status.</p>
        
        <div class="card p-4 shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Creator Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Google</td>
                        <td>Sundar Pichai</td>
                        <td>google@gmail.com</td>
                        <td><span class="badge bg-success">Activated</span></td>
                        <td><button class="btn btn-sm btn-outline-secondary">Deactivate</button></td>
                    </tr>
                    <tr>
                        <td>Microsoft</td>
                        <td>Satya Nadella</td>
                        <td>microsoft@gmail.com</td>
                        <td><span class="badge bg-success">Activated</span></td>
                        <td><button class="btn btn-sm btn-outline-secondary">Deactivate</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
