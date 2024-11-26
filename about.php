<?php
    include ("auth.php");
    $image = "https://scontent.xx.fbcdn.net/v/t1.15752-9/462551354_8415233305239226_1760240002678485714_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeEr6W9sLzaqIT8Cq-t0ND_kIkhyd9rnHJsiSHJ32uccmyCYZiTYi_wlfNGnYiW9Ssou1bdIqYq2ZEzf1SLN0oy8&_nc_ohc=LAXsnGWjOG8Q7kNvgFRnT3a&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.xx&oh=03_Q7cD1QHOq32QlJschxjIpSqYn4OBkJBJ7EGwvLX0zahoULn9XA&oe=676D3EC8";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Page</title>
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

            img{
                width: 500px;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <div class="layer">
        <button><a href="./home.php">Home</a></button>
        <button><a href="./faq.php">FAQ</a></button>
        <button disabled>About Us</button>
    </div>
    <main>
        <h2>Welcome to About Us Page <span><?= $logged_user?></span>, You have successfully Login.</h2>
        <img src="<?= $image?>" alt="">
        <form method="POST">
            <button><a href="logout.php">Logout</a></button>
        </form>

    </main>
</body>
</html>