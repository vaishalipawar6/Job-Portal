<?php
include '../db.php';
// Company Job Posting form matching thesis requirements (Figure 15)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Job Post - Job Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Job Portal - Company Panel</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
                <a class="nav-link text-light" href="../logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5" style="max-width: 600px;">
        <h2 class="mb-4">Create Job Post</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Job Title</label>
                <input type="text" name="job_title" class="form-control" required placeholder="e.g. Software Engineer">
            </div>
            <div class="mb-3">
                <label class="form-label">Minimum Salary</label>
                <input type="number" name="min_salary" class="form-control" required placeholder="e.g. 30000">
            </div>
            <div class="mb-3">
                <label class="form-label">Maximum Salary</label>
                <input type="number" name="max_salary" class="form-control" required placeholder="e.g. 60000">
            </div>
            <div class="mb-3">
                <label class="form-label">Experience (In Years) Required</label>
                <input type="number" name="experience" class="form-control" required placeholder="e.g. 2">
            </div>
            <div class="mb-3">
                <label class="form-label">Qualification Required</label>
                <textarea name="qualification" class="form-control" rows="3" required placeholder="e.g. B.E. Computer Science or equivalent"></textarea>
            </div>
            <button type="submit" name="create_job" class="btn btn-success w-100">Create Job Post</button>
        </form>
    </div>
</body>
</html>
