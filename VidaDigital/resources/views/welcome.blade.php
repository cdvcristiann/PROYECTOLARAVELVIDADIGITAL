<!---extiende de carpeta layouts.app--->
@extends('layouts.app')
<!---introduccion del home parallax--->
@section('content')
<div id="parallax-image">
    <div  class="text-white">
    <h1 id="centrar">TE GUIAMOS HACIA LA TRANSFORMACIÓN DIGITAL.</h1>
    <div class="d-flex justify-content-center">
    <p class="centrar"> CONSTRUCCIÓN DE SERVICIOS PARA EL MUNDO DE HOY.</p>
    </div>
    </div>
</div>

<!--scroll de card de distintos lenguajes-->
<div class="container">
    @include('contenidoscroll.scroll')
</div>
<br><br>
<!--final de contenido con la publicidad-->
<div class="imagenmitad">
    <br><br><br>
    <h1 id="centrar">Brindamos soluciones a medida.</h1>
    <div class="d-flex justify-content-center">
    <p class="centrar">Entendemos que cada organizacion es compleja y única por lo que nos comprometemos al 100% con cada proyecto.</p>
    </div class="conteiner">
    <div class="d-flex justify-content-center">
    <a type="button" class="btn btn-danger">ÚNETE AL TEAM</a>
    </div>
    </div>
</div>
    <!--contenido footer--->
    <footer>
        @include('contenidofooter.footer')
    </footer>
@endsection
