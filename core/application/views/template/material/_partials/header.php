<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <base href="<?php echo $base_url; ?>" />

    <title><?php echo $page_title; ?></title>

    <!--Import Google Icon Font-->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/assets/css/materialize.min.css" media="screen,projection"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/images/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/images/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/images/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/images/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/assets/images/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/assets/images/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/assets/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/assets/images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/assets/images/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/assets/images/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/assets/images/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/assets/images/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/assets/images/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/assets/images/mstile-310x310.png" />

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