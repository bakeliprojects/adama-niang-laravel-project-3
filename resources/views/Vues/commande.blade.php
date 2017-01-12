<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
    <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
      aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('acceuil.create')  }}">Ajouter article </a>
      <a class="navbar-brand" href="{{ route('acceuil.index')  }}">Liste des articles </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/logout') }}"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          Se déconnecter </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false">
          <!--<i class="fa fa-user" aria-hidden="true"></i>
          Utilisateur <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">S'inscrire </a></li>
            <li><a href="#">Se connecter </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"> Se deconnecter </a></li>
          </ul>-->
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
        {{--Header Finished--}}

        <p>Ajouter article !!</p>
        {!! Form::open(['action' => 'ControllerVendeur@store', 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('commandeur', 'Votre nom svp:') !!}
                {!! Form::text('commandeur', null, ['class'=>'form-control', 'placeholder'=>'Entrez votre nom']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('nombre', 'Le nombre voulu :') !!}
                {!! Form::text('nombre', null,  ['class'=>'form-control', 'placeholder'=>'La quantité de la commande']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('contact', 'Vos contacts :') !!}
                {!! Form::text('contact', null,  ['class'=>'form-control', 'placeholder'=>'Coordonnees !!' ]) !!}
            </div>
            <br>
            <div class="form-group">
                {!! Form::submit( 'Enregistrer', ['class'=>'btn btn-toolbar']) !!} 
            </div>
        {!! Form::close() !!}
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {{--Footer started--}}
    </div>
</body>
</html>