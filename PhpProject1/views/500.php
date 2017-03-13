<?php
header('X-PHP-Response-Code: 500', true, 500);
?>
<!doctype html>
<html>
    <head>
        <title>Who needs arms with legs like these?</title>
    </head>

    <body>
        <h1>Who needs arms with legs like these?</h1>
        <p style="font-size:1.5rem;">It looks like something broke, but don't worry about it. It was our fault.</p>

        <p>Here's the gritty details:</p>
        <code><pre><?php echo $exception;?></pre></code>

        <p>Try visiting the <a href="<?php echo HOME;?>">UW-Whitewater</a>.</p>
    </body>
</html>
