@extends('layout.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
            <h1 class="my-4">Captura de una oferta nueva</h1>

                @if ($errors->any())
                    <div class="errors">
                        <p><strong>Por favor llena los siguientes campos: </strong></p>

                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{url('ofertas')}}">
                @csrf
                            <label for="nombre">Nombre*</label>
                            <input type="text" name ="nombre" class="form-control" id="nombre" placeholder="Nombre del oferta" value="{{old('nombre')}}">


                            <div class="row">
                                <div class="col">
                                    <label for="fecha_inicio">Fecha Inicio*</label>
                                    <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio" value="{{old('fecha_inicio')}}">
                                </div>

                                <div class="col">
                                    <label for="fecha_termino">Fecha Término (opcional)</label>
                                    <input type="date" name="fecha_termino" class="form-control" id="fecha_termino" value="{{old('fecha_termino')}}">
                                </div>
                            </div>




                            <label for="descripcion">Descripción*</label>
                            <textarea name="descripcion" class="form-control" id="descripcion" rows="3" >{{old('descripcion')}}</textarea>


                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="precio">Precio*</label>
                                    <input type="number" name ="precio" class="form-control" id="precio" value="{{old('precio')}}">
                                </div>

                                <div class="form-group col-md-9">
                                    <label for="categoria">Categoria*</label><br>
                                    <select class="custom-select mr-sm-2" id="categoria_id" name="categoria_id">
                                        @foreach($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <label for="precio">Ubicacion*</label>
                            <input type="url" name ="ubicacion" class="form-control" id="ubicacion" value="{{old('ubicacion')}}">

                            <label for="referencias">Referencias*</label>
                            <textarea name="referencias" class="form-control" id="referencias" rows="3" >{{old('referencias')}}</textarea>

                            <label for="foto_oferta">Foto de la Oferta*(En caso de no contar con la imagen ingresa el enlace de la misma)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                            </div>

                            <br><input type="text" name ="imagen" class="form-control" id="imagen" placeholder="Imagen de la oferta" value="{{old('imagen')}}"><br>

                        <p>
                            <button type="submit" class= "btn btn-warning btn-block"> Publicar</button>
                        </p>
                </form>
            <!-- </div> -->
        </div>
    </div>
</div>

@endsection
