<?php
include_once "./classes/Shout.php";
$shout = new Shout();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shout Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/main.css" />
    <script src="javascripts/main.js"></script>
</head>

<body>
    <div class="wrapper clr">
        <header class="headsection clr">
            <h2>
                ShoutBOX with PHP & MySQLi
            </h2>
        </header>
        <section class="content clr">
            <div class="box">
                <ul>
                <?php
                $getData = $shout->getAllData();
                if($getData){
                    while($data = $getData->fetch_assoc()){ ?>
                        <li><span><?php echo $data['time_col'] ?></span> - <b><?php echo $data['name_col'] ?></b> <?php echo $data['message_col'] ?></li>
                <?php }
                }
                ?>
                </ul>
            </div>
            <div class="shoutform clr">
                <form action="">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input type="text" name="name" required placeholder="Enter your message"/></td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>:</td>
                            <td><input type="text" name="msg" required placeholder="Enter your message"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" value="Shout It"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
        <footer class="footsection clr">
            <h2>&copy; Copyright with Abir's Project</h2>
        </footer>
    </div>
</body>
</html>