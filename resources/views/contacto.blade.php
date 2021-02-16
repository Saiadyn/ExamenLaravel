@extends('plantilla')

@section('title','Mail')

@section('content')
    <h1 class="text-center">Contacta con nosotros</h1>
    <div class="mx-auto col mt-3 border border-dark p-3">
        <form>
            <div class="form-group row">
                <div class="col">
                    <input class="col form-control" type="text" placeholder="Correo electrónico">
                </div>
                <div class="col">
                    <input class="col form-control" type="text" placeholder="Asunto">
                </div>
            </div>
            <div class="col">
                <textarea style="resize:none" class="w-100" rows="5" placeholder=" Escribe aquí . . ."></textarea>
            </div>
        </form>
        <div class="row">
            <div class="col">
                <button class="col border rounded py-2 mt-3"><strong>Enviar</strong></button>
            </div>
        </div>
    </div>
@endsection