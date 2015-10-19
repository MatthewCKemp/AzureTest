<!DOCTYPE html>
<html>
    <head>
        </head>
        <body>
            <p>
                <?php
                   $wantedgood = "specs";

                    switch ($wantedgood) {
                        case 1;
                            if($wantedgood == "specs"){
                                print "You must be 16";
                            }
                        break;
                        case 2;
                            if($wantedgood == "mugs"){
                                print "You must be 18";
                            }
                            break;
                        case 3;
                            if($wantedgood == "sausage rolls"){
                                print "You must be 21";
                            }
                            break;
                    }
                ?>
            </p>
        </body>
</html>