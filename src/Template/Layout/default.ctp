<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $this->fetch('title') ?> - Clenance</title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Roboto:400,700,300') ?>
    <?= $this->Html->css('app.min.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') ?>
    <?= $this->Html->script('app.min.js') ?>
</head>

<body>

<div class="page-wrap">

<nav class="navbar navbar-default navbar-clenance">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-principal">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand animated fadeIn" href="<?php echo $this->Url->build(['controller' => 'home', 'action' => 'index']); ?>">
          <img src="img/logo_avene.png" class="img-responsive" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-principal">
      <ul class="nav navbar-nav pull-right animated fadeIn pos-r" id="navlist">
        <li <?= ($this->request->params['controller'] == 'Home') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'home', 'action' => 'index']); ?>">Home</a>
        </li>
        <li <?= ($this->request->params['controller'] == 'Desafio') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'desafio', 'action' => 'index']); ?>">Desafio</a>
        </li>
        <li <?= ($this->request->params['controller'] == 'Wall') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'wall', 'action' => 'index']); ?>">Cleanance Wall</a>
        </li>
        <li <?= ($this->request->params['controller'] == 'Linha') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'linha', 'action' => 'index']); ?>">Linha Completa</a>
        </li>
        <li <?= ($this->request->params['controller'] == 'Regulamento') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'regulamento', 'action' => 'index']); ?>">Regulamento</a>
        </li>
      </ul>


      <div class="clearfix"></div>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>


</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-5 text-center">
                <a href="#"><span class="hidden-xs hidden-sm">ENTRE EM</span> CONTATO</a>
            </div>
            <div class="col-lg-6  col-xs-7 text-center">
                <a href="#" class="btn-rede">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="btn-rede">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="http://www.eau-thermale-avene.com.br/" target="_blank" class="hidden-xs">
                    www.eau-thermale-avene.com.br
                </a>
            </div>
            <div class="col-lg-3 hidden-xs text-right">
                <a href="#">
                    Avène 2015
                </a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>