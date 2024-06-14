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
        <h2 class="mb-4">Cuestionario para determinar el <b>nivel de conocimiento</b> de centros turísticos de la ciudad de Trujillo</h2>
        <p class="mb-4">La información recabada será confidencial y utilizada para la obtención del título de profesional en Ingeniería de Sistemas en la Universidad Privada César Vallejo.</p>
        <h4 class="mb-4">Instrucciones: Seleccione la respuesta que crea correcta.</h4>
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
        <form action="{{ route('formulario3.store') }}" method="POST">
        @csrf
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Pregunta</th>
                <th scope="col">Alternativas</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>¿A que cultura pertenece la ciudadela de Chanchan?</td>
                <td>
                    <select class="form-control" name="pregunta1" required>
                    <option>Seleccionar</option>
                    <option value="0">Moche</option>
                    <option value="4">Chimu</option>
                    <option value="0">Inca</option>
                    <option value="0">Azteca</option>
                    <option value="0">Paracas</option>
                </select>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>¿Cuál es el medio de transporte más conveniente si viajas en grupo para llegar al centro turístico Chanchan?</td>
                <td>
                    <select class="form-control" name="pregunta2" required>
                    <option>Seleccionar</option>
                    <option value="4">Taxi</option>
                    <option value="0">Tren</option>
                    <option value="0">Bus</option>
                    <option value="0">Microbús</option>
                    <option value="0">A pie</option>
                </select>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>¿Cuál es el costo promedio de una entrada a un centro turístico de Trujillo?</td>
                <td>
                    <select class="form-control" name="pregunta3" required>
                    <option>Seleccionar</option>
                    <option value="0">Más de 15 soles</option>
                    <option value="0">8 soles</option>
                    <option value="4">10 soles</option>
                    <option value="0">20 soles</option>
                    <option value="0">5 soles</option>
                </select>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>¿Qué actividades se pueden realizar en el balneario Huanchaco?</td>
                <td>
                    <select class="form-control" name="pregunta4" required>
                    <option>Seleccionar</option>
                    <option value="0">Disfrutar de la playa</option>
                    <option value="0">Clases de surf</option>
                    <option value="0">Paseo en caballito de totora</option>
                    <option value="0">Restaurantes de comida marina y criolla</option>
                    <option value="4">Todas las anteriores</option>
                </select>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>En los diferentes centros turísticos de Trujillo ¿Existen descuentos por ser estudiante?</td>
                <td>
                    <select class="form-control" name="pregunta5" required>
                    <option>Seleccionar</option>
                    <option value="4">Si</option>
                    <option value="0">No</option>
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
