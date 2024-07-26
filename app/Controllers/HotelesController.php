<?php

namespace App\Controllers;
use App\Models\HotelesModel;

class HotelesController extends BaseController
{
    public function index(): string
    {
        $hoteles = new HotelesModel();
        $datos['datos']=$hoteles->findAll();

        return view('hoteles',$datos);
    }

    public function eliminarHoteles($id = null)
    {
        $hoteles = new HotelesModel();
        $hoteles->delete([$id]);
        return redirect()->route('hoteles');
    }

    public function buscarHoteles($id=null){
        $hoteles = new HotelesModel();
        $datos['datos']=$hoteles->where('hotel_id',$id)->first();
        return view('form_modificar_hoteles', $datos);
    }

    public function modificarHoteles(){
        $datos=[
            'hotel_id'=>$this->request->getVar('txtHotelId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correoelectronico'=>$this->request->getVar('txtCorreo'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'ciudad_id'=>$this->request->getVar('txtCiudadId'),
            'categoria_id'=>$this->request->getVar('txtCategoriaId'),
            'usuario_id'=>$this->request->getVar('txtUsuarioId'),
        ];
        
        $hoteles = new HotelesModel();

        $hoteles->update($datos['hotel_id'],$datos);
        return redirect()->route('hoteles');
    }

    public function nuevoHotel(): string
    {
        return view ('form_agregar_hoteles');
    }

    public function agregarHotel()
    {
        $hotelid = $this->request->getVar('txthotelId');
        $nombre = $this->request->getVar('txtNombre');
        $correo = $this->request->getVar('txtCorreo');
        $telefono = $this->request->getVar('txtTelefono');
        $direccion = $this->request->getVar('txtDireccion');
        $ciudad = $this->request->getVar('txtCiudadId');
        $categoria = $this->request->getVar('txtCategoriaId');
        $usuario = $this->request->getVar('txtUsuarioId');

        $hoteles = new HotelesModel();
        $datos = [
            'hotel_id' => $hotelid,
            'nombre' => $nombre,
            'correoelectronico' => $correo,
            'telefono' => $telefono,
            'direccion' => $direccion,
            'ciudad_id' => $ciudad,
            'categoria_id' => $categoria,
            'usuario_id' => $usuario,
        ];

        $hoteles->insert($datos);
        return redirect()->route('hoteles');
    }


}
