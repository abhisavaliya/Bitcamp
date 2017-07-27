<?php

include("connect.php");
include("translate.php");
include("med_loc.php");

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title> Home Delivery </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> </head>

    <body>
        <nav class="navbar navbar-inverse " style="border-radius:0;">
            <div class="container-fluid">
                <div class="navbar-header"> <a class="navbar-brand" href="index.php">MediScrib</a> </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="shop.php">SHOP</a></li>
                </ul>
            </div>
        </nav>
        <form action="loc_reg.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="location">Enter Location</label>
                    </td>
                    <td>
                        <select name="location" required>
                            <option value="">--SELECT MS--</option>
                            <?php echo $options; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit"> </td>
                </tr>
            </table>
        </form>
    </body>

    </html>