<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/home" method="post">
        @csrf
        <h2>Buat Account Baru</h2>
        <h3>Sign Up Form</h3>
        <label>First Name:</label><br><br>
        <input type="text" name="firstname"><br><br>
        <label>Last Name:</label><br><br>
        <input type="text" name="lastname"><br><br>
        <label>Gender:</label><br><br>
        <input type="radio">Male<br>
        <input type="radio">Female<br>
        <input type="radio">Other<br>
        <label>Nationality:</label><br><br>
        <select name="negara">
            <option value="ina">Indonesia</option>
            <option value="mas">Malaysia</option>
            <option value="aus">Australia</option>
        </select><br><br>
        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="bahasa">Bahasa Indonesia<br>
        <input type="checkbox" name="bahasa">English<br>
        <input type="checkbox" name="bahasa">Other<br><br>
        <label>Bio:</label><br><br>
        <textarea name="message" rows="10" cols="30"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
    <a href="/">Kembali ke Home</a>
    
    
</body>
</html>