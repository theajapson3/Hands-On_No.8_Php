<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Registration Form</h1>

    <form>

        <label for="age">Age</label>
        <input 
            type="number" 
            id="age" 
            name="age"
            min="1"
            max="120"
            required
            placeholder="Enter your age"
        >

        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Rather not say">Rather not say</option>
        </select>

        <label for="email">Email</label>
        <input 
            type="email" 
            id="email" 
            name="email"
            required
            placeholder="example@email.com"
        >

        <label for="address">Address</label>
        <textarea 
            id="address" 
            name="address"
            required
            placeholder="Enter your address"
        ></textarea>

        <label for="contact">Contact Number</label>
        <input 
            type="tel" 
            id="contact" 
            name="contact"
            pattern="[0-9]{11}"
            maxlength="11"
            required
            placeholder="09XXXXXXXXX"
        >

        <button type="submit">Submit</button>

    </form>

</div>

</body>
</html>
