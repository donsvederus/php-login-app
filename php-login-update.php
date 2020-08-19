<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dons PHP Login App Example</title>
    <!-- Added Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="col-xs-6">

        <!-- Login Form Start -->
        <form action="php-login-update.php" method="post">
        
            <div class="form-group">

                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">

                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            
            </div>

            <div class="form-group">
            
                <select name="id" id="" class="">

                <?php showAllData(); ?>
                
                </select>
            
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        
        </form>
        <!-- Login Form End -->

    </div>

</div>   
</body>
</html>