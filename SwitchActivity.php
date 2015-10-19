<!DOCTYPE html>
<html>
    <head>
        </head>
        <body>
            <p>
                <?php
                    $myage = 20;

                    if ($myage >= 16){
                        print"You may buy specs ";
                    }
                    else if ($myage >= 18){
                        print"You may buy specs and mugs ";
                    }
                    else if ($myage >= 21){
                        print"You may buy specs, mugs and sausage rolls ";
                    }
                    else print "You may buy NOTHING. "
                ?>
            </p>
        </body>
</html>