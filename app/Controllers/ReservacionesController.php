<?php

namespace App\Controllers;
use App\Models\ReservacionesModel;
use App\Models\UsuariosModel;
use App\Models\HotelesModel;
use App\Models\HabitacionesModel;

class ReservacionesController extends BaseController
{
    public function index(): string
    {
        $reservacion = new ReservacionesModel();
        $datos['datos']=$reservacion->findAll();

        return view('reservaciones',$datos);
    }

    public function eliminarReservaciones($id = null)
    {
        $reservacion = new ReservacionesModel();
        $reservacion->delete([$id]);
        return redirect()->route('reservaciones');
    }

    public function buscarReservaciones($reservacion_id = null)
    {
        $reservacion = new ReservacionesModel();
        $datos['datos']=$reservacion->where('reservacion_id',$reservacion_id)->first();
        return view ('form_modificar_reservaciones', $datos);
    }

    public function modificarReservaciones()
    {
        $datos =[
            'reservacion_id' => $this->request->getVar('txtReservacion'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'hotel_id'=>$this->request->getVar('txtHotelId'), 
            'descripcion'=>$this->request->getVar('txtDescripcion'),
            'usuario_id'=>$this->request->getVar('txtUsuarioId'),
        ];
        $reservacion = new ReservacionesModel();
        
        $reservacion->update($datos['reservacion_id'], $datos);
        return redirect()->route('reservaciones');
}

    public function nuevoReservacion(): string
    {
    return view ('form_agregar_reservaciones');
    }

    public function agregarReservacion()
    {
        $reservacionid = $this->request->getVar('txtReservacionId');
        $fecha = $this->request->getVar('txtFecha');
        $clienteid = $this->request->getVar('txtClienteId');
        $hotelid = $this->request->getVar('txtHotelId');
        $descripcion = $this->request->getVar('txtDescripcion');
        $usuarioid = $this->request->getVar('txtUsuarioId');

        $reservacion = new ReservacionesModel();
        
        $datos=[
            'reservacion_id' => $reservacionid,
            'fecha' => $fecha,
            'cliente_id' => $clienteid,
            'hotel_id' => $hotelid,
            'descripcion' => $descripcion,
            'usuario_id' => $usuarioid
        ];
        
        $reservacion->insert($datos);
        return redirect()->route('reservaciones');
    }
}