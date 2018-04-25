

<div class="col-sm-4 mb-3">
    <div class="card">
        <a href="#"><img class="card-img-top" src="{{ asset('images/image.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <h5 class="card-title"><a href="#">{{ $evento->nombre }}</a></h5>
            <p class="card-text">{{ $evento->descripcion }}.</p>
            <a href="#" class="btn btn-primary">Ver Evento</a>
        </div>
    </div>
</div>