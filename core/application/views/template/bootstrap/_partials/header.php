<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <base href="<?php echo $base_url; ?>" />

    <title><?php echo $lang; ?></title>
<!--    <title>--><?php //echo $page_title; ?><!--</title>-->

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