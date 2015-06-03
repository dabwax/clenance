<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

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

    <?=$this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Roboto:400,700,300') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker.standalone.min.css') ?>
    <?= $this->Html->css('//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css') ?>
    <?= $this->Html->css('/cms/css/app.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') ?>
    <?= $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js') ?>
    <?= $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_pt_BR.js') ?>
    <?= $this->Html->script('http://cdnjs.cloudflare.com/ajax/libs/camanjs/4.0.0/caman.full.min.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.pt-BR.min.js') ?>
    <?= $this->Html->script('//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js') ?>
    <?= $this->Html->script('/cms/js/app.js') ?>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <?= $this->Html->script('app.min.js') ?>
</head>

<body class="<?php echo strtolower($this->request->params['controller']); ?> <?php echo strtolower($this->request->params['controller']); ?>-<?php echo strtolower($this->request->params['action']); ?>">

            <nav class="navbar navbar-default">
              <div class="container">
                  <a class="navbar-brand pull-right" href="<?php echo $this->Url->build('/'); ?>" style="padding: 0px;">
                      <img src="<?php echo $this->Url->build('/img/logo_avene.png'); ?>" style="height: 44px; margin-top: 2px;" alt="">
                  </a>

              </div><!-- /.container-fluid -->
            </nav>

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <h1 class="titulo-painel">Painel de Controle <small>
                           <?php echo $user->email; ?> </small></h1>

                        <hr>

                    </div> <!-- .col-md-12 -->

                </div> <!-- .row -->

                <div class="row">

                    <div class="col-md-3">
                        <h2 class="subtitulo-painel">Usuários Administrativos</h2>

                        <ul class="lista-sidebar">
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'users', 'action' => 'index'] ); ?>"> <i class="fa fa-user"></i> Listar Usuários</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'users', 'action' => 'add'] ); ?>"><i class="fa fa-user-plus"></i> Adicionar Usuário</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'auth', 'action' => 'logout'] ); ?>"><i class="fa fa-sign-out"></i> Sair</a>
                            </li>
                        </ul>
                        <h2 class="subtitulo-painel">Cadastro de Participantes</h2>

                        <ul class="lista-sidebar">
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'participants', 'action' => 'index'] ); ?>"> <i class="fa fa-pencil-square-o"></i> Listar Participantes</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'participants', 'action' => 'instagram'] ); ?>"> <i class="fa fa-plus-square"></i> Aprovar do Instagram</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'participants', 'action' => 'export'] ); ?>"><i class="fa fa-folder"></i> Exportar Participantes</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-9">

                        <?= $this->Flash->render() ?>
                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>

            </div> <!-- .container -->

<script src="//localhost:35729/livereload.js"></script>

</body>
</html>