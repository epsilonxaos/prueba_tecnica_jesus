<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h3 class="text-center">Formulario</h3>
                <form action="{{route('app.send')}}" method="POST" class="form-test">
                    @csrf
                    <input class="form-control mb-3" type="text" name="nombre" id="nombre" placeholder="Nombre">
                    <input class="form-control mb-3" type="email" name="email" id="email" placeholder="Email">
                    <input class="form-control mb-3" type="tel" name="telefono" id="telefono" placeholder="Telefono">
                    <textarea class="form-control mb-3" name="mensaje" id="mensaje" placeholder="Mensaje" cols="30" rows="5"></textarea>

                    @if (Session::has('message'))
                        <div class="alert alert-success text-center mb-3">
                            {{Session::get('message')}}
                        </div>
                    @endif

                    <div class="text-center">
                        <button type="submit" class="btn">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
