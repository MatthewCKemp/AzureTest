<!DOCTYPE html>
<html>
    <head>
        </head>
        <body>
            <p>
                <?php
                   $wantedgood = "mugs";

                    switch ($wantedgood) {
                        case "specs";
                            print "You must be 16";
                            break;
                        case "mugs";
                            print "You must be 18";
                            break;
                        case "sausage rolls";
                            print "You must be 21";
                            break;
                    }
                ?>
            </p>
        </body>
</html>