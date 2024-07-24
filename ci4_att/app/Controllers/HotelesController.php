<?php

namespace App\Controllers;
use App\Models\HotelesModel;


class HotelesController extends BaseController
{
    public function index(): string
    {
        $hoteles = new HotelesModel();
        $datos ['datos']=$hoteles->findAll();
      // print_r($datos);
      return view('hoteles',$datos);
    }



     //agregar planes y nuevo planes
     
     }