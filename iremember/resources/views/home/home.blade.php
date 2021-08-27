<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white overflow-hidden px-8 shadow-xl sm:rounded-lg">

                <div class="container p-5">


                    <div class="form-group row">
                        <div class="mx-auto">
                        <h1>¿A que te recuerda?</h1>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-5 col-form-label">Titulo del corto:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-5 col-form-label">Enlace</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-5 col-form-label">Me recuerda a:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="mx-auto">
                        <button type="button" class="btn btn-outline-dark">Subir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
