<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cuestionario de Interés Turístico</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-check {
      margin-bottom: 25px;
    }
    .form-check-label {
      margin-left: 20px;
    }
  </style>
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
        <h2 class="mb-4">Cuestionario para determinar el <b>nivel de reconocimiento</b> de centros turísticos de la ciudad de Trujillo</h2>
        <p class="mb-4">La información recabada será confidencial y utilizada para la obtención del título de profesional en Ingeniería de Sistemas en la Universidad Privada César Vallejo.</p>

        <h4 class="mb-4">Instrucciones: Observa la imagen y elige la respuesta que creas conveniente. </h4>
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
        <form action="{{ route('formulario2.store') }}" method="POST">
        @csrf
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Imagen</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td class="image-container">
                    <img src="{{ asset('images/ChanChan.png') }}" alt="" class="mr-3">
                  </td>
                  <td>
                    <div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1A" value="0" required>
                          <label class="form-check-label" for="respuesta1A">A. Ciudadela de rombos</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1B" value="0" required>
                          <label class="form-check-label" for="respuesta1B">B. Ciudadela de arena</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1C" value="2" required>
                          <label class="form-check-label" for="respuesta1C">C. Ciudadela de Chan Chan</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1D" value="0" required>
                          <label class="form-check-label" for="respuesta1D">D. Ciudadela de barro</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1E" value="0" required>
                          <label class="form-check-label" for="respuesta1E">E. Ciudadela de Chank Chan</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1F" value="0" required>
                        <label class="form-check-label" for="respuesta1F">F. No estoy seguro</label>
                      </div>
                  </div>
                  </td>
              </tr>
              <!-- Pregunta 2 -->
              <tr>
                  <th scope="row">2</th>
                  <td class="image-container">
                    <img src="{{ asset('images/Huacaluna.png') }}" alt="Imagen de la pregunta 2" class="mr-3">
                  </td>
                  <td>
                    <div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2A" value="0" required>
                          <label class="form-check-label" for="respuesta2A">A. Ciudadela de Chan Chan</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2B" value="0" required>
                          <label class="form-check-label" for="respuesta2B">B. Huaca de la araña</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2C" value="3" required>
                          <label class="form-check-label" for="respuesta2C">C. Huaca de la luna</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2D" value="0" required>
                          <label class="form-check-label" for="respuesta2D">D. Huaca de la luz</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2E" value="0" required>
                          <label class="form-check-label" for="respuesta2E">E. Huaca del sol</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta2" id="respuesta2F" value="0" required>
                        <label class="form-check-label" for="respuesta2F">F. No estoy seguro</label>
                      </div>
                  </div>
                  </td>
              </tr>
              <!-- Pregunta 3 -->
              <tr>
                  <th scope="row">3</th>
                  <td class="image-container">
                    <img src="{{ asset('images/PlazaTrujillo.png') }}" alt="Imagen de la pregunta 3" class="mr-3">
                  </td>
                  <td>
                    <div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3A" value="0" required>
                          <label class="form-check-label" for="respuesta3A">A. Plaza la Libertad - Trujillo</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3B" value="3" required>
                          <label class="form-check-label" for="respuesta3B">B. Plaza de armas - Trujillo</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3C" value="0" required>
                          <label class="form-check-label" for="respuesta3C">C. Plaza armonía - Trujillo</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3D" value="0" required>
                          <label class="form-check-label" for="respuesta3D">D. Plaza nueva - Trujillo</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3E" value="0" required>
                          <label class="form-check-label" for="respuesta3E">E. Plaza San Martín - Trujillo</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta3" id="respuesta3F" value="0">
                        <label class="form-check-label" for="respuesta3F">F. No estoy seguro</label>
                      </div>
                  </div>
                  </td>

                  <!-- Pregunta 4 -->
                  <tr>
                    <th scope="row">4</th>
                    <td class="image-container">
                      <img src="{{ asset('images/CasaUrquiaga.png') }}" alt="Imagen de la pregunta 4" class="mr-3">
                  </td>
                  <td>
                    <div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4A" value="0" required>
                          <label class="form-check-label" for="respuesta4A">A. Casa de los Condes</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4B" value="0" required>
                          <label class="form-check-label" for="respuesta4B">B. Casa de Orbegoso</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4C" value="3" required>
                          <label class="form-check-label" for="respuesta4C">C. Casa Urquiaga</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4D" value="0" required>
                          <label class="form-check-label" for="respuesta4D">D. Casa Iturregui</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4E" value="0" required>
                          <label class="form-check-label" for="respuesta4E">E. Casa César Vallejo</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta4" id="respuesta4F" value="0">
                        <label class="form-check-label" for="respuesta4F">F. No estoy seguro</label>
                      </div>
                  </div>
                  </td>
              </tr>

              <!-- Pregunta 5 -->
              <tr>
                <th scope="row">5</th>
                <td class="image-container">
                  <img src="{{ asset('images/Huanchaco.png') }}" alt="Imagen de la pregunta 5" class="mr-3">
                </td>
                <td>
                  <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5A" value="0" required>
                        <label class="form-check-label" for="respuesta5A">A. Playa Pimentel</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5B" value="0" required>
                        <label class="form-check-label" for="respuesta5B">B. Playa Malabrigo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5C" value="3" required>
                        <label class="form-check-label" for="respuesta5C">C. Playa Huanchaco</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5D" value="0" required>
                        <label class="form-check-label" for="respuesta5D">D. Playa Buenos Aires</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5E" value="0" required>
                        <label class="form-check-label" for="respuesta5E">E. Playa Besique</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="pregunta5" id="respuesta5F" value="0">
                      <label class="form-check-label" for="respuesta5F">F. No estoy seguro</label>
                    </div>
                </div>
                </td>
            </tr>

            <!-- Pregunta 6 -->
            <tr>
                <th scope="row">6</th>
                <td class="image-container">
                  <img src="{{ asset('images/JardinBotanico.png') }}" alt="Imagen de la pregunta 6" class="mr-3">
                </td>
                <td>
                  <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6A" value="0" required>
                        <label class="form-check-label" for="respuesta6A">A. Parque de las Leyendas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6B" value="3" required>
                        <label class="form-check-label" for="respuesta6B">B. Jardín Botánico</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6C" value="0" required>
                        <label class="form-check-label" for="respuesta6C">C. Parque de hortalizas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6D" value="0" required>
                        <label class="form-check-label" for="respuesta6D">D. Jardín de los Sentidos</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6E" value="0" required>
                        <label class="form-check-label" for="respuesta6E">E. Parque Divino Maestro</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="pregunta6" id="respuesta6F" value="0">
                      <label class="form-check-label" for="respuesta6F">F. No estoy seguro</label>
                    </div>
                </div>
                </td>
            </tr>

            <!-- Pregunta 7 -->
            <tr>
                <th scope="row">7</th>
                <td class="image-container">
                  <img src="{{ asset('images/Conache.png') }}" alt="Imagen de la pregunta 7" class="mr-3">
                </td>
                <td>
                  <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7A" value="0" required>
                        <label class="form-check-label" for="respuesta7A">A. Laguna Totora</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7B" value="0" required>
                        <label class="form-check-label" for="respuesta7B">B. Laguna Laredo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7C" value="0" required>
                        <label class="form-check-label" for="respuesta7C">C. Humedales de Laredo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7D" value="3" required>
                        <label class="form-check-label" for="respuesta7D">D. Laguna Conache</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7E" value="0" required>
                        <label class="form-check-label" for="respuesta7E">E. Laguna Huanchaco</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="pregunta7" id="respuesta7F" value="0">
                      <label class="form-check-label" for="respuesta7F">F. No estoy seguro</label>
                    </div>
                </div>
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
