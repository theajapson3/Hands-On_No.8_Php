<?php
include "header.php";
?>

<div class="box">
    <h1>Forgot Password</h1>

    <p>Enter your email to reset your password.</p>

    <form>
        <label>Email</label>

        <input 
            type="email" 
            placeholder="Enter your email"
        >

        <button type="submit">Reset Password</button>
    </form>

    <p>
        <a href="login.php">Back to Login</a>
    </p>
</div>

<?php
include "footer.php";
?>
