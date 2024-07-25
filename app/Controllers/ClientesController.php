<?php

namespace App\Controllers;
use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->findAll();

        return view('clientes',$datos);
    }

    public function eliminarClientes($id = null)
    {
     
        $clientes = new clientesModel();
        $clientes->delete([$id]);
        return redirect()->route('clientes');
    }
}
