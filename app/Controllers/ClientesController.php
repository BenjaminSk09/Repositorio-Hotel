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

    public function buscarCliente($id=null){
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id',$id)->first();
        return view('form_modificar_clientes',$datos);
    }
    
    public function modificarCliente(){
        $datos=[
            'cliente_id'=>$this->request->getVar('txtClienteId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nit'=>$this->request->getVar('txtNit'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'correo_electronico'=>$this->request->getVar('txtCorreoElectronico'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'contrasenia'=>$this->request->getVar('txtContrasenia')
        ];
        $clientes = new ClientesModel();

        $clientes->update($datos['cliente_id'],$datos);
        return redirect()->route('clientes');
    }

    public function nuevoCliente(): string
    {
        return view ('form_agregar_clientes');
    }

    public function agregarCliente()
    {
        $clienteid = $this->request->getVar('txtClienteId');
        $nombre = $this->request->getVar('txtNombre');
        $apellido = $this->request->getVar('txtApellido');
        $nit = $this->request->getVar('txtNit');
        $telefono = $this->request->getVar('txtTelefono');
        $correo = $this->request->getVar('txtCorreo');
        $direccion = $this->request->getVar('txtDireccion');
        $contrasenia = $this->request->getVar('txtContrasenia');

        $clientes = new ClientesModel();
        $datos = [
            'cliente_id' => $clienteid,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'nit' => $nit,
            'telefono' => $telefono,
            'correo_electronico' => $correo,
            'direccion' => $direccion,
            'contrasenia' => $contrasenia,
        ];

        $clientes->insert($datos);
        return redirect()->route('clientes');
    }
}
