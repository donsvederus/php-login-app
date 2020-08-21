<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php updateTable(); ?>

<?php include "includes/header.php" ?>

        <h1 class="text-center">Update</h1>
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

<?php include "includes/footer.php" ?>