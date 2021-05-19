<div>
    <div>

        <div class="container justify-content-center">

            @if (session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label  class="form-label" for="text">Nombre Actividad</label>
                    <input type="nombre actividad" name="nombres" placeholder="Nombre Actividad" type="text" required class="form-control" value=""  wire:model="nombactividad">
                    @error('nombactividad') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label  class="form-label" for="text">Imagen</label>
                    <input type="Imagen" name="imagen" placeholder="Imagen" type="text" required class="form-control" value="" wire:model="imagen">
                    @error('imagen') <span class="error">{{ $message }}</span> @enderror
                </div>

            </div>
</div>

<div class="row">

    <div class="form-group col-sm-12 col-md-6 col-lg-6">
        <label  class="form-label" for="text">Fecha Inicio</label>
        <input id="fecha inicio" name="fecha inicio" placeholder="fecha inicio" type="text" required class="form-control" value="" wire:model="fecha_inicio">
        @error('fecha_inicio') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group col-sm-12 col-md-6 col-lg-6">
        <label  class="form-label" for="text">Fecha Cierre</label>
        <input id="fecha cierre" name="fecha cierre" placeholder="fecha cierre" type="text" required class="form-control" value="" wire:model="fecha_cierre">
        @error('fecha_cierre') <span class="error">{{ $message }}</span> @enderror
    </div>

 </div>

</div>

<div class="row">
    <div class="form-group col-sm-12 col-md-6 col-lg-6">
        <label  class="form-label" for="text">Hora Inicio</label>
        <input id="hora inicio" name="hora inicio" placeholder="hora inicio" type="email" required class="form-control" value="" wire:model="hora_inicio">
        @error('hora_inicio') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group col-sm-12 col-md-6 col-lg-6">
        <label  class="form-label" for="text">Hora Finalizacion</label>
        <input type="hora finalizacion" name="hora finalizacion" placeholder="hora finalizacion"  required class="form-control" value="" wire:model="hora_finalizacion">
        @error('hora_finalizacion') <span class="error">{{ $message }}</span> @enderror
    </div>

</div>

    <div class="row">
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
            <label  class="form-label" for="text">Entidad Responsable</label>
            <input type="text" id="entidad responsable" name="entidad responsable" placeholder="entidad responsable" type="text" required class="form-control" value="" wire:model="ent_responsable">
            @error('ent_responsable') <span class="error">{{ $message }}</span> @enderror
        </div>

    </div>
    <br>

    <div class="d-flex justify-content-center">
        <button wire:click="store"  class=" btn btn-primary">Registar Actividad</button>
    </div>

</div
