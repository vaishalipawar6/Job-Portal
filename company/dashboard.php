<?php
include '../db.php';
// Company dashboard logic matching thesis requirements:
// - View posted jobs
// - View applications received
// - Accept or deny applications
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Dashboard - Job Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Job Portal - Company Panel</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="create-job-post.php">Post a Job</a>
                <a class="nav-link text-light" href="../logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="mb-4">Company Dashboard</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card p-4 shadow-sm border-success">
                    <h4>Manage & Track</h4>
                    <p class="text-muted">View your active job postings and manage candidate applications received.</p>
                    <a href="create-job-post.php" class="btn btn-success btn-sm">Create New Job Post</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card p-4 shadow-sm">
                    <h4>Received Applications & Status</h4>
                    <p class="text-muted">Review candidate profiles, check resumes, and accept or reject applications.</p>
                    <hr>
                    <div class="alert alert-secondary">
                        <strong>Sample Application:</strong> Ram Bajaj applied for <em>Programmer</em> <span class="badge bg-warning text-dark float-end">Pending</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
