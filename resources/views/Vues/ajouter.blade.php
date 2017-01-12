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
      <a class="navbar-brand" href="{{ route('acceuil.index')  }}">Liste des articles proposés</a>
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
                {!! Form::label('nom', 'Le nom du produit:') !!}
                {!! Form::text('nom', null, ['class'=>'form-control', 'placeholder'=>'Nom']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('genre', 'Description :') !!}
                {!! Form::text('genre', null,  ['class'=>'form-control', 'placeholder'=>'Produit local ou importé']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('prix', 'Le prix :') !!}
                {!! Form::text('prix', null,  ['class'=>'form-control', 'placeholder'=>'Le prix a débourser' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('contact', 'Photo :') !!}
                {!! Form::file('contact', null,  ['class'=>'form-control', 'placeholder'=>'Image illustratif']) !!}
            </div>
            <br>
            <div class="form-group">
                {!! Form::submit( 'Enregistrer', ['class'=>'btn btn-toolbar']) !!} 
                <!-- <button class="btn btn-toolbar pull-right">
                    <a href="/acceuil">Back to Home</a>
                </button> -->
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
</div>
<footer>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-footer">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
      aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</footer>
</body>
</html>