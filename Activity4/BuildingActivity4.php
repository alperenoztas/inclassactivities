<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registration Form</h1>
    <!-- Form Layout -->
    <form action="BuildingActivity4-preview.php" method="get">

        <!-- Input Fields -->
        <label>Name :</label>
        <input type="text" name="name" id="name"><br><br>

        <label>Username :</label>
        <input type="text" name="username" id="username"><br><br>

        <label>Password :</label>
        <input type="password" name="password" id="password"><br><br>

        <label>Address :</label>
        <input type="text" name="address" id="address"><br><br>

        <label>Country :</label>
            <select name="countries" id="countries">
                <option value="none">(Please select a country)</option>
                <option value="Turkey">Turkey</option>
                <option value="Holland">Holland</option>
                <option value="Germany">Germany</option>
            </select> <br><br>
        <label>ZIP Code :</label>
        <input type="text" name="zip" id="zip"><br><br>

        <label>Email :</label>
        <input type="email" name="email" id="email"><br><br>

        <label>Sex :</label>
        <input type="radio" name="sex" id="sex" value="male"> Male
        <input type="radio" name="sex" id="sex" value="female"> Female <br><br>

        <label>Language :</label>
        English <input type="checkbox" name="languages[]" id="language" value="English"> 
        Turkish <input type="checkbox" name="languages[]" id="language" value="Turkish"> 
        German <input type="checkbox" name="languages[]" id="language" value="German"> <br><br>

        
        <label>About :</label>
        <textarea name="about" id="about" cols="30" rows="5"></textarea><br><br>

        <input type="submit" id="submit-button" value="submit">
    </form>
</body>
</html>