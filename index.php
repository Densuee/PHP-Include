<?php
    session_start();
    $image = "https://scontent.fdvo2-2.fna.fbcdn.net/v/t39.30808-1/462506294_1937230920112907_9120498914835128602_n.jpg?stp=dst-jpg_s160x160_tt6&_nc_cat=110&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeExoEwO4uZykvrrMYCX_u0zYgG9TVODxCBiAb1NU4PEIHM0CbhyfcAkErlm3dLFtemCdC6M2gZ4A7kB0ZA6IkJl&_nc_ohc=AdNW0tC-WtMQ7kNvgFCBfoT&_nc_zt=24&_nc_ht=scontent.fdvo2-2.fna&_nc_gid=A7-WJKCm8EiYNcD4lBW5JXz&oh=00_AYBRrGZGulkgHmnvuo2KGFwCdonzk8sOz9RGc1XCynOKDw&oe=674BBBC2";
    $personIcon = "./assest/material-symbols--person.svg";
    $lockIcon = "./assest/material-symbols--lock.svg";

    $invalid = false;
    $login = isset($_POST["login"]);
    $username = $_POST["username"] ?? null;
    $password = $_POST["password"] ?? null;


    if($login){
        if($username === "Dennis" && $password === "Dennis123"){
            $_SESSION["username"] = $username;
            header("Location: home.php");

        } else{
            $invalid = true;
            
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            user-select: none;
            font-family: serif;
            box-sizing: border-box;

        }

        main {
            background: linear-gradient(90deg, rgba(37, 63, 92, 1) 0%, rgba(11, 28, 51, 1) 100%);
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;

            & fieldset {
                background-color: #e0cad6c7;
                backdrop-filter: blur(10px);
                height: auto;
                border: 2px solid #e1cbd7;
                width: 300px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                border-radius: 10px;


                & legend {
                    text-align: center;

                    & img {
                        border: 2px solid #e1cbd7;
                        width: 150px;
                        border-radius: 100px;
                    }
                }

                & h4 {
                    color: #0c1e4a;
                    margin-top: 20px;
                }

                & form {
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                    padding: 20px 35px;
                    align-items: center;
                    justify-content: center;

                    & .layer {
                        display: flex;
                        align-items: center;
                        justify-content: center;

                        & label {
                            border: 1px solid black;
                            border-right: none;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            background-color: #c28fb4;
                            border-top-left-radius: 10px;
                            border-bottom-left-radius: 10px;
                            height: 40px;
                            padding: 5px 5px;

                            & img {
                                width: 25px;
                                height: 30px;
                            }
                        }

                        & input {
                            border-top-right-radius: 10px;
                            border-bottom-right-radius: 10px;
                            border: 1px solid black;
                            outline: none;
                            border-left: none;
                            height: 40px;
                            width: 200px;
                            padding: 10px 15px;
                        }
                    }

                    & p {
                        margin: 3px 0;
                        color: red;
                        font-weight: bold;
                        font-size: 12px;
                    }

                    & button {
                        width: 240px;
                        height: 30px;
                        border: 1px solid black;
                        border-radius: 10px;
                        outline: none;
                        transition: all 300ms;
                        cursor: pointer;

                        &:hover {
                            background-color: rgb(160, 160, 160);
                        }

                    }
                }
            }
        }
    </style>
</head>

<body>
    <main>
        <fieldset>
            <legend><img src="<?=$image?>" alt=""></legend>
            <h4>Dennis Miparanum Jr.</h4>
            <form method="POST" action="">
                <div class="layer">
                    <label for="username"><img src="<?=$personIcon?>"></label>
                    <input type="text" id="username" name="username" value="Dennis" placeholder="Username">
                </div>
                <div class="layer">
                    <label for="password"><img src="<?= $lockIcon?>"></label>
                    <input type="text" id="password" name="password" value="Dennis123" placeholder="Password">
                </div>
                <p>
                    <?php
                        if($invalid){
                            echo("Invalid Credential.");
                        }
                    ?>
                </p>
                <button name= "login" type="submit">Log in</button>
            </form>
        </fieldset>
    </main>
</body>

</html>