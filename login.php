<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in - IUGB</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="img\logo\logo.png"> 
</head>
<body class="body-login">
    <div class="black-fill">
        <br><br>
        <div class="d-flex justify-content-center align-items-center flex-column">
        <?php if (!empty($errorMessage)): ?>
        <div class="mt-2 alert alert-danger alert-dismissible fade show text-center" role="alert">
          <strong><?php echo $errorMessage; ?></strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif; ?>
            <form class="login" method="post" action="req/login.php">
                <div class="text-center"> 
                    <img src="img\logo\logo.png" width="100"> 
                </div>
                <h3>LOG-IN</h3>
                <div class="mb-3">
                    
      
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter your username" required >
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password" required> 
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="index.php" class="text-decoration-none">Cancel</a>
            </form>
            <br>
            <div class="text-center text-light">
                <> Copyright &copy; 2023 International University of Grand Bassam. All rights reserved.  </>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
