<div class="p-4">

    <div class="card  mx-auto" style="width: 42rem;">
        <div class="card-body">

            <div class="form-group row">
                <div class="mx-auto">
                <h1>¿A que te recuerda?</h1>
                </div>
            </div>

            <div class="form-group row">
                <label  class="col-sm-5 col-form-label">Titulo del corto:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" wire:model.defer="title">
                </div>
            </div>

            {{-- <div class="form-group row">
                <label  class="col-sm-5 col-form-label">Enlace</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" wire:model="enlace">
                </div>
            </div> --}}

            <div class="form-group row">
                <label  class="col-sm-5 col-form-label">Me recuerda a:</label>
                <div class="col-sm-7">
                    <textarea class="form-control" wire:model.defer="body"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="mx-auto">
                <button type="button" wire:click="subir" class="btn btn-outline-dark">Subir</button>
                </div>
            </div>

        </div>
      </div>
</div>
