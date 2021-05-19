<div>
    <div class="container justify-content-center">

        @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
        <div class="form-row">
            <div class="form-group col-8">
                <label  class="form-label" for="text">Nombre  Lugar</label>
                <input type="nombres" name="nombres" placeholder="nombre lugar" type="text" required class="form-control" value=""  wire:model="nombre_lugar">
                @error('nombre_lugar') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group  col-8">
                <label  class="form-label" for="text">longitud</label>
                <input type="longitud" name="longitud" placeholder="longitud" type="text" required class="form-control" value="" wire:model="longitud">
                @error('longitud') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-8">
                <label  class="form-label" for="text">latitud</label>
                <input type="lo" name="latitud" placeholder="latitud" type="text" required class="form-control" value="" wire:model="latitud">
                @error('latitud') <span class="error">{{ $message }}</span> @enderror
            </div>


        </div>

    
            <div class="d-flex justify-content-">
                <button wire:click="store"  class=" btn btn-primary">Registar lugar</button>
            </div>

         

        </div>
</div>
