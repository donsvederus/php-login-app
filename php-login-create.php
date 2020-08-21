<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php createRows(); ?>

<?php include "includes/header.php" ?>

        <h1 class="text-center">Create</h1>
        <!-- Login Form Start -->
        <form action="php-login-create.php" method="post">
        
            <div class="form-group">

                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">

                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        
        </form>
        <!-- Login Form End -->

<?php include "includes/footer.php" ?>