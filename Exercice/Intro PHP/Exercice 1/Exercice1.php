<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Games N Watch</title>
        <?php
            include ("coquille.php");
        ?>
        <?php
            function getTime(){
                return date("H:i");
            }
        ?>
    </head>
    <body>
        <div class="pure-g">
            <div class="pure-u-5-5">
                <?php
                    include("Header.php");
                ?>
            </div>
            <div class="pure-u-1-5">
                <?php
                    include("Menu.php");
                ?>
            </div>
            <div class="pure-u-4-5">
                <section>
                    <article>
                        On va prétendre que ceci représente un article décent.
                    </article>
                    <article>
                        <?php
                            echo getTime();
                        ?> 
                        <br>Bye là
                    </article>
                </section>
            </div>
            <div class="pure-u-5-5">
                <?php
                    include("Footer.php");
                ?>
            </div>
        </div>
    </body>
</html>