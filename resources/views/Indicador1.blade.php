<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cuestionario de Interés Turístico</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/TruxVRlogo.png') }}" height="90px" width="90px" alt="logo" style="border-radius: 50%;">
                Trux VR
            </a>
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('formulario1.index')}}">Formulario 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('formulario2.index')}}">Formulario 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('formulario3.index')}}">Formulario 3</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="mb-4">Cuestionario para determinar el <b>nivel de interés</b> turístico en la ciudad de Trujillo</h2>
        <p class="mb-4">La información recabada será confidencial y utilizada para la obtención del título de profesional en Ingeniería de Sistemas en la Universidad Privada César Vallejo.</p>
        <h4 class="mb-4">Instrucciones: Elige la escala que creas conveniente.</h4>
        @if(session('success'))
            <div class="alert alert-success">
                {!! session('success') !!}
            </div>
        @endif


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('formulario1.store') }}" method="POST">
        @csrf
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Afirmación</th>
                <th scope="col">Escala</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Tengo la intención de visitar los centros turísticos de Trujillo en el futuro.</td>
                <td>
                    <select class="form-control" name="afirmacion1" required>
                        <option value="0">Seleccionar</option>
                        <option value="0.5">1 Muy en desacuerdo</option>
                        <option value="1">2 Algo en desacuerdo</option>
                        <option value="1.5">3 Ni de acuerdo, ni en desacuerdo</option>
                        <option value="2">4 Parcialmente de acuerdo</option>
                        <option value="2.5">5 Totalmente de acuerdo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Tengo planeado visitar los centros turísticos de Trujillo con frecuencia en el futuro.</td>
                <td>
                    <select class="form-control" name="afirmacion2" required>
                        <option value="0">Seleccionar</option>
                        <option value="0.5">1 Muy en desacuerdo</option>
                        <option value="1">2 Algo en desacuerdo</option>
                        <option value="1.5">3 Ni de acuerdo, ni en desacuerdo</option>
                        <option value="2">4 Parcialmente de acuerdo</option>
                        <option value="2.5">5 Totalmente de acuerdo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Estaría dispuesto(a) a recomendar los centros turísticos de Trujillo a otras personas en el futuro</td>
                <td>
                    <select class="form-control" name="afirmacion3" required>
                        <option value="0">Seleccionar</option>
                        <option value="0.5">1 Muy en desacuerdo</option>
                        <option value="1">2 Algo en desacuerdo</option>
                        <option value="1.5">3 Ni de acuerdo, ni en desacuerdo</option>
                        <option value="2">4 Parcialmente de acuerdo</option>
                        <option value="2.5">5 Totalmente de acuerdo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Estoy emocionado(a) por explorar los centros turísticos de Trujillo cuando disponga de tiempo o en mi próxima visita.</td>
                <td>
                    <select class="form-control" name="afirmacion4" required>
                        <option value="0">Seleccionar</option>
                        <option value="0.5">1 Muy en desacuerdo</option>
                        <option value="1">2 Algo en desacuerdo</option>
                        <option value="1.5">3 Ni de acuerdo, ni en desacuerdo</option>
                        <option value="2">4 Parcialmente de acuerdo</option>
                        <option value="2.5">5 Totalmente de acuerdo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Considero que los centros turísticos de Trujillo son una parte importante de su historia.</td>
                <td>
                    <select class="form-control" name="afirmacion5" required>
                        <option value="0">Seleccionar</option>
                        <option value="0.5">1 Muy en desacuerdo</option>
                        <option value="1">2 Algo en desacuerdo</option>
                        <option value="1.5">3 Ni de acuerdo, ni en desacuerdo</option>
                        <option value="2">4 Parcialmente de acuerdo</option>
                        <option value="2.5">5 Totalmente de acuerdo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Normalmente, valoras la oportunidad de aprender sobre la historia y cultura de Trujillo a través de sus centros turísticos. </td>
                <td>
                    <select class="form-control" name="afirmacion6" required>
                        <option value="0">Seleccionar</option>
                        <option value="0.5">1 Muy en desacuerdo</option>
                        <option value="1">2 Algo en desacuerdo</option>
                        <option value="1.5">3 Ni de acuerdo, ni en desacuerdo</option>
                        <option value="2">4 Parcialmente de acuerdo</option>
                        <option value="2.5">5 Totalmente de acuerdo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Te sientes atraído (a) e identificado (a) por la diversidad cultural que posee Trujillo a través de los centros turísticos que ofrece.</td>
                <td>
                    <select class="form-control" name="afirmacion7" required>
                        <option value="0">Seleccionar</option>
                        <option value="0.5">1 Muy en desacuerdo</option>
                        <option value="1">2 Algo en desacuerdo</option>
                        <option value="1.5">3 Ni de acuerdo, ni en desacuerdo</option>
                        <option value="2">4 Parcialmente de acuerdo</option>
                        <option value="2.5">5 Totalmente de acuerdo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Creo que visitar los centros turísticos de Trujillo sería una experiencia valiosa.</td>
                <td>
                    <select class="form-control" name="afirmacion8" required>
                        <option value="0">Seleccionar</option>
                        <option value="0.5">1 Muy en desacuerdo</option>
                        <option value="1">2 Algo en desacuerdo</option>
                        <option value="1.5">3 Ni de acuerdo, ni en desacuerdo</option>
                        <option value="2">4 Parcialmente de acuerdo</option>
                        <option value="2.5">5 Totalmente de acuerdo</option>
                    </select>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar respuestas</button>
        </div>
        </form>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
