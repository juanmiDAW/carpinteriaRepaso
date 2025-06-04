<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Models\Mueble;
use App\Models\Pedido;

use function PHPUnit\Framework\returnSelf;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pedidos.index', ['pedidos' => Pedido::with('mueble')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePedidoRequest $request)
    {

        dd($request);
        $request->validated();
        Pedido::create([
            'cantidad' => 1,
            'user_id' => auth()->user()->id,
            'mueble_id' => $request->mueble_id,
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
