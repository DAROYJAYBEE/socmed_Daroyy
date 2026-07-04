7.<?php include 'views/header.php';
        if(isset($_SESSION['aid'])){
            header("location:profile.php");
        }
?>
    <div class="registration_form">
        <p class="title">SIGNUP</p>
            <form action="models/register_account.php" method="POST">
                <label for="firstname">First name</label>
                     <input type="text" name="firstname" id="firstname" placeholder="">
                <label for="lastname">Last name</label>
                     <input type="text" name="lastname" id="lastname" placeholder="">
                <label for="email">Email</label>
                     <input type="email" name="email" id="email" placeholder="">    
                <label for="password">Password</label>
                     <input type="password" name="password" id="password">    
                <label for="cpassword"> Confirm Password</label>
                     <input type="password" name="cpassword" id="cpassword">
                     <input type="submit"value="Submit">
            </form>              
        </div>        
<?php include 'views/footer.php';