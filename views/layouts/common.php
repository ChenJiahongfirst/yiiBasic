<html>
    <head>
        <meta charset="utf-8">
        <title>common</title>
    </head>
    <body>

        <?php
        if (isset($this->blocks['block1'])) {
            echo $this->blocks['block1'];
        } else {
            ?>     
            <h3>common</h3>
            <?php
        }
        ?>
        <?= $content ?>
    </body>
</html>
