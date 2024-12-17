<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form action="/home" method="post">
        @csrf
        <label for="">First Name:</label><br>
        <br><input type="text" name="first"><br>
        <br><label for="">Last Name:</label><br>
        <br><input type="text" name="last"><br>
        <br><label for="gender">Gender:</label><br>
        <br><input type="radio" id="laki" name="gender" value="laki">
        <label for="laki">Male</label><br>
        <input type="radio" id="perempuan" name="gender" value="perempuan">
        <label for="perempuan">Woman</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
        <br><label for="national">Nationality:</label><br>
        <br><select name="" id="national">
            <option value="indonesia">Indonesia</option>
            <option value="other">Other</option>
        </select><br>
        <br><label for="bahasa">Langguage Spoken:</label><br>
        <br><input type="checkbox" name="bahasa">Bahasa Indonesia
        <br><input type="checkbox" name="bahasa">English
        <br><input type="checkbox" name="bahasa">Other<br>
        <br><label for="bio">Bio:</label><br>
        <br><textarea name="bio" rows="10"  cols="30"></textarea>
        <br><input type="submit">

    </form>
</body>
</html>