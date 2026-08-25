<?php
require "header.php";
?>

<div class="box">
    <h1>Register</h1>

    <form>
        <label>Full Name</label>
        <input type="text" placeholder="Enter your name">

        <label>Age</label>
        <input type="number" placeholder="Enter your age">

        <label>Gender</label>
        <select>
            <option>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>

        <label>Email</label>
        <input type="email" placeholder="Enter your email">

        <label>Address</label>
        <textarea placeholder="Enter your address"></textarea>

        <label>Contact Number</label>
        <input type="tel" placeholder="09XXXXXXXXX">

        <label>Password</label>
        <input type="password" placeholder="Enter password">

        <button type="submit">Register</button>
    </form>
</div>

<?php
require "footer.php";
?>
