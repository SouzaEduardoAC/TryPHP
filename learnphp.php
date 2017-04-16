<html>
<head>
    <title>Information Gathered</title>
</head>
<body>
    <?php
        /**
         * Created by PhpStorm.
         * User: souzaeduardoac */
         # Date: 16/04/17
         // Time: 19:04

    echo "<p>Data processed</p>";

    date_default_timezone_set('UTC');

    /* Echos the date
            h : 12 hr format
            H : 24 hr format
            i : Minutes
            s : Seconds
            u : Microseconds
            a : Lowercase am or pm
            l : Full text for the day
            F : Full text for the month
            j : Day of the month
            S : Suffix for the day st, nd, rd, etc
            Y : 4 digit y */

    echo date('h:i:s:u a, l F jS Y e');
    ?>
</body>
</html>