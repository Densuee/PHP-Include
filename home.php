<?php
    include ("auth.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            user-select: none;
            box-sizing: border-box;
            font-family: serif;
        }
        .layer{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            margin-top: 20px;
            margin-bottom: -20px;

            & button{
                width: 100px;
                height: 25px;
                outline: none;
                border: 1px solid black;
                border-radius: 5px;
                transition: all 300ms;

                & a{
                    text-decoration: none;
                    color: black;
                }

                &:hover{
                    background-color: grey;
                }
            }
        }
        main{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 20px;

            
            & button{
                width: 100px;
                height: 25px;
                outline: none;
                border: 1px solid black;
                border-radius: 5px;
                transition: all 300ms;

                & a{
                    text-decoration: none;
                    color: black;
                }

                &:hover{
                    background-color: grey;
                }

            }
            & span{
                color: green;
                font-size: 35px;
            }
        }
    </style>
</head>
<body>
    <div class="layer">
        <button disabled>Home</button>
        <button><a href="./faq.php">FAQ</a></button>
        <button><a href="./about.php">About Us</a></button>
    </div>
    <main>
        <h2>Welcome to Home Page <span><?= $logged_user?></span>, You have successfully Login.</h2>
        <form method="POST">
            <button><a href="logout.php">Logout</a></button>
        </form>

    </main>
</body>
</html>