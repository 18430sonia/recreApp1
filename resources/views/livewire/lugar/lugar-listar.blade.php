<div>
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="bu">
        </div>

        @if($lugares->count())
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-auto  ">
                        <thead class="thead-bg-seccess">
                        <tr>
                            <th>Id</th>
                            <th>nombre lugar</th>
                            <th>longitud</th>
                            <th>latitud</th>


                            <th>opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($lugares as $lugars)
                            <tr>
                                <td>{{$lugars->id}}</td>
                                <td>{{$lugars->nombre_lugar}}</td>
                                <td>{{$lugars->longitud}}</td>
                                <td>{{$lugars->latitud}}</td>


                                <td>
                                    <div class='row'>

                                        <div class= "col-lg-6 col-sm-6">
                                            <a class="btn btn-primary" href="{{route('lugares.edit', $lugars)}}"><i class="far fa-edit"></i></a>

                                            </a>

                                        </div>

                                        <div class="col-lg-6 col-sm-6">

                                            <button wire:click="destroy({{$lugars}})" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>
                                         </div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


            @else

            <div class="card-body">
                <strong>NINGUN USUARIO COINCIDE CON LA BUSQUEDA!</strong>
            </div>
        @endif
    </div>
</div>
