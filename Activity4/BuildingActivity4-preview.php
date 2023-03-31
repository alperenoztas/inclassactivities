<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Preview</h1>
    <?php

        //Name Condition
        if( $_GET['name'] == null)
        {
            echo "Name: Not Provided <br>";
        }
        else
        {
            echo $_GET['name']."<br>";
        }

        //Username Condition
        if( $_GET['username'] == null)
        {
            echo "Username: Not Provided <br>";
        }
        else
        {
            echo $_GET['username']."<br>";
        }

        //Password Condition
        if( $_GET['password'] == null)
        {
            echo "Password: Not Provided <br>";
        }
        else
        {
            echo $_GET['password']."<br>";
        }

        //Address Condition
        if( $_GET['address'] == null)
        {
            echo "Address: Not Provided <br>";
        }
        else
        {
            echo $_GET['address']."<br>";
        }

        //Country Condition
        if( $_GET['countries'] == "none" )
        {
            echo "Country: Not Provided <br>";
        }

        else
        {
            echo $_GET['countries']."<br>";
        }
        
        //Zip Code Condition
        if($_GET['zip'] == null)
        {
            echo "Zip Code: Not Provided <br>";
        }
        else
        {
            echo $_GET['zip']."<br>";
        }

        //Email Condition
        if($_GET['email'] == null)
        {
            echo "Email: Not Provided <br>";
        }
        else
        {
            echo $_GET['email']."<br>";
        }

        //Sex Condition
        if(empty($_GET['sex']))
        {
            echo "Sex: Not Provided <br>";
        }
        else
        {
            echo $_GET['sex']."<br>";
        }

        //Language Condition
        if(empty($_GET['languages']))
        {
            echo "Language: Not Provided <br>";
        }
        else
        {
            foreach($_GET['languages'] as $item)
            {
                echo $item . " ";
            }
            echo "<br>";
        }

        if($_GET['about'] == null)
        {
            echo "About: Not Provided <br>";
        }
        else
        {
            echo $_GET['about']."<br>";
        }
       
            
        


    ?>
</body>
</html>




