<div class="col-sm-4 mb-3">
    <div class="card">
        <a href="#"><img class="card-img-top" src="{{ asset('images/image.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <h5 class="card-title"><a href="#">{{ $invitacion->nombre }}</a></h5>
            <p class="card-text">{{ $invitacion->descripcion }}.</p>
            <a href="#" class="btn btn-primary">Ver Invitacion</a>
        </div>
    </div>
</div>