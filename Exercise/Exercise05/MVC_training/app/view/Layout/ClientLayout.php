<html>
    <head>
        <title><?php echo !empty($page_title)?$page_title:'Website'  ?></title>
        <meta charset=UTF-8/>
        <link type="text/css" rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/asset/client/css/style.css"   />
    </head>
    <body>
        <?php
            $this->render('blocks/header');
            $this->render($content,$sub_content);
            $this->render('blocks/footer');
        ?>
        <script type="text/javascript" src="<?php echo _WEB_ROOT; ?>/public/asset/client/js/script.css"></script>
    </body>
</html>
