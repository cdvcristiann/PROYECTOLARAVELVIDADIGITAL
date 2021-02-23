
<ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1" type="button" class="btn btn-outline-danger text-nowrap btn-block" id="boton-personalizado">Desarrollo Web</a></li>
    <li><a data-toggle="tab" aria-pressed="true" href="#menu2" type="button" class="btn btn-outline-danger active text-nowrap btn-block" id="boton-personalizado">Desarrollo Movil</a></li>
    <li><a data-toggle="tab" href="#menu3" type="button" class="btn btn-outline-danger text-nowrap btn-block" id="boton-personalizado"> Desarrollo API's</a></li>
</ul>
<br><br>
<div class="bd-example">
    <div class="scrollspy-container">
      <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
        <div class="tab-content">
        <div id="menu1" class="tab-pane fade">
            @include('contenidoscroll.scrolldesarrolloweb')
        </div>
        <div id="menu2" class="tab-pane fade in active">
            @include('contenidoscroll.scrolldesarrollomovil')
        </div>
        <div id="menu3" class="tab-pane fade">
            @include('contenidoscroll.scrolldesarrolloapi')
        </div>
        </div>
      </div>
    </div>
</div>
