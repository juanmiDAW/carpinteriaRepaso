<div>
    <h2>Crear Mueble</h2>
    <div>

        <label for="">Denominacion</label>
        <input type="text" wire:model.live="denominacion">
    </div>

    <div>

        <label for="">Tipo:</label>
        <select name="" id="" wire:model.live="tipo">
            <option value="App\Models\Prefabricado">prefabricado</option>
            <option value="App\Models\Fabricado">fabricado</option>
        </select>
    </div>

    @if ($tipo == 'App\Models\Fabricado')
        <div>
            <label for="">Ancho</label>
            <input type="text" wire:model.live="ancho">

            <label for="">Alto</label>
            <input type="text" wire:model.live="alto">
        </div>
    @endif

    <div>

        <label for="">Precio</label>
        <input type="number" wire:model.live="precio">
    </div>

    <div>
        <button wire:click="crearMueble">Crear Mueble</button>
    </div>
</div>
