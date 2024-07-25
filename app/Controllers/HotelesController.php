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
}
