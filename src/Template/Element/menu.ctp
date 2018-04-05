<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Estadísticas</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Confederaciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista de Confederaciones',['controller'=>'confederacion', 'action'=>'index', 'class'=>'nav-brand']) ?></li>
            <li><?php echo $this->Html->link('Alta de Confederacines',['controller'=>'confederacion', 'action'=>'add', 'class'=>'nav-brand']) ?></li>
          </ul>
        </li>



          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paises <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista de Paises',['controller'=>'paises', 'action'=>'index', 'class'=>'nav-brand']) ?></li>
            <li><?php echo $this->Html->link('Alta de Paises',['controller'=>'paises', 'action'=>'add', 'class'=>'nav-brand']) ?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estadios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista de Estadios',['controller'=>'estadios', 'action'=>'index', 'class'=>'nav-brand']) ?></li>
            <li><?php echo $this->Html->link('Alta de Estadios',['controller'=>'estadios', 'action'=>'add', 'class'=>'nav-brand']) ?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista de Equipos',['controller'=>'equipos', 'action'=>'index', 'class'=>'nav-brand']) ?></li>
            <li><?php echo $this->Html->link('Alta de Equipos',['controller'=>'equipos', 'action'=>'add', 'class'=>'nav-brand']) ?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Torneos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista de Torneos',['controller'=>'torneos', 'action'=>'index', 'class'=>'nav-brand']) ?></li>
            <li><?php echo $this->Html->link('Alta de Torneos',['controller'=>'torneos', 'action'=>'add', 'class'=>'nav-brand']) ?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Árbitros<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista de Arbitros',['controller'=>'arbitros', 'action'=>'index', 'class'=>'nav-brand']) ?></li>
            <li><?php echo $this->Html->link('Alta de Arbitros',['controller'=>'arbitros', 'action'=>'add', 'class'=>'nav-brand']) ?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Técnicos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista de Técnicos',['controller'=>'tecnicos', 'action'=>'index', 'class'=>'nav-brand']) ?></li>
            <li><?php echo $this->Html->link('Alta de Técnicos',['controller'=>'tecnicos', 'action'=>'add', 'class'=>'nav-brand']) ?></li>
          </ul>
        </li>

      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Televisoras<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista de Televisoras',['controller'=>'televisoras', 'action'=>'index', 'class'=>'nav-brand']) ?></li>
            <li><?php echo $this->Html->link('Alta de Televisoras',['controller'=>'televisoras', 'action'=>'add', 'class'=>'nav-brand']) ?></li>
          </ul>
        </li>

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>