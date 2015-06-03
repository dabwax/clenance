<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if(!empty($og_locale)) : ?>
        <meta property="og:locale" content="<?php echo $og_locale; ?>">
    <?php endif; ?>

    <?php if(!empty($og_url)) : ?>
        <meta property="og:url" content="<?php echo $og_url; ?>">
    <?php endif; ?>

    <?php if(!empty($og_title)) : ?>
        <meta property="og:title" content="<?php echo $og_title; ?>">
    <?php endif; ?>

    <?php if(!empty($og_site_name)) : ?>
        <meta property="og:site_name" content="<?php echo $og_site_name; ?>">
    <?php endif; ?>

    <?php if(!empty($og_description)) : ?>
        <meta property="og:description" content="<?php echo $og_description; ?>">
    <?php endif; ?>

    <?php if(!empty($og_image)) : ?>
        <meta property="og:image" content="<?php echo $og_image; ?>">
    <?php endif; ?>

    <?php if(!empty($og_image_type)) : ?>
        <meta property="og:image:type" content="<?php echo $og_image_type; ?>">
    <?php endif; ?>

    <?php if(!empty($og_image_width)) : ?>
        <meta property="og:image:width" content="<?php echo $og_image_width; ?>">
    <?php endif; ?>

    <?php if(!empty($og_image_height)) : ?>
        <meta property="og:image:height" content="<?php echo $og_image_height; ?>">
    <?php endif; ?>

    <meta property="og:type" content="website">

    <title><?= $this->fetch('title') ?> - Clenance</title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Roboto:400,700,300') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') ?>
    <?= $this->Html->css('app.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') ?>
    <?= $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js') ?>
    <?= $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_pt_BR.js') ?>
    <?= $this->Html->script('http://cdnjs.cloudflare.com/ajax/libs/camanjs/4.0.0/caman.full.min.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js') ?>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <?= $this->Html->script('app.min.js') ?>
</head>

<body class="<?php echo strtolower($this->request->params['controller']); ?> <?php echo strtolower($this->request->params['controller']); ?>-<?php echo strtolower($this->request->params['action']); ?>">

<div class="page-wrap">

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>


</div>

<script src="//localhost:35729/livereload.js"></script>

</body>
</html>