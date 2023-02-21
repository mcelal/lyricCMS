<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <base href="<?php echo $base_url; ?>" />

    <title><?php echo $page_title; ?></title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/assets/css/materialize.min.css" media="screen,projection"/>

    <?php
    foreach ($meta_data as $name => $content)
    {
        if (!empty($content))
            echo "<meta name='$name' content='$content'>".PHP_EOL;
    }

    foreach ($stylesheets as $media => $files)
    {
        foreach ($files as $file)
        {
            $url = starts_with($file, 'http') ? $file : base_url($file);
            echo "<link href='$url' rel='stylesheet' media='$media'>".PHP_EOL;
        }
    }

    foreach ($scripts['head'] as $file)
    {
        $url = starts_with($file, 'http') ? $file : base_url($file);
        echo "<script src='$url'></script>".PHP_EOL;
    }
    ?>
    <!--Let browser know website is optimized for mobile-->
</head>

<body class="grey lighten-4">

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper container">
                <a href="#!" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container" style="margin-top: 30px">
        <?php $this->load->view($inner_view); ?>
    </div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="/assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/assets/js/materialize.min.js"></script>

</body>
</html>