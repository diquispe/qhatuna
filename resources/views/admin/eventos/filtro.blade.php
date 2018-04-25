<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-3">

        <form action="{{ route('admin.admin_eventos_index') }}" method="get"
              class="form-inline float-right" id="filtrarestado">
            <div class="form-group">
                <input type="text" name="text_evento" class="form-control" placeholder="Texto a Buscar" value="{{ app('request')->input('text_evento') }}"
                       role="search" >
            </div>
            <div class="form-group">
                <select class="selectpicker ml-2" data-size="10"
                        data-style="btn btn-success" title="Seleccione el Estado"
                        name="estado" onChange="this.form.submit();">

                    <option value="borrador" @if(app('request')->input('estado')== 'borrador')  selected @endif>Borrador</option>
                    <option value="pendiente" @if(app('request')->input('estado')== 'pendiente')  selected @endif>Pendiente</option>
                    <option value="enproceso" @if(app('request')->input('estado')== 'enproceso')  selected @endif>En Proceso</option>
                    <option value="concluido" @if(app('request')->input('estado')== 'concluido')  selected @endif>Conluido</option>
                    <option value="anulado" @if(app('request')->input('estado')== 'anulado')  selected @endif>Anulado</option>
                </select>
            </div>

        </form>
    </div>
</div>