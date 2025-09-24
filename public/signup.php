<?php

// Handle signup logic here (e.g., save user to DB)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - DeepSec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body { background: #0a2342; color: #e0ffe0; }
        .auth-box {
            background: #112d4e;
            border-radius: 12px;
            padding: 2rem;
            margin-top: 5rem;
            box-shadow: 0 0 20px #21e6c1;
        }
        .btn-green {
            background: #21e6c1;
            color: #0a2342;
        }
        .btn-green:hover {
            background: #278ea5;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center">
    <div class="auth-box col-md-5">
        <h2 class="mb-4 text-center">Sign Up</h2>

        <form method="POST" action="signupprocess.php">
            <div class="mb-3">
                <label class="form-label">First name</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Last name</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-green w-100">Sign Up</button>
        </form>
        <div class="mt-3 text-center">
            <span>Already have an account? <a href="signin.php" class="text-info">Login</a></span>
        </div>
    </div>
</div>
</body>
</html>