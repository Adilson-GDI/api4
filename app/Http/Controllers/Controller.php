<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function ListaUsuario()
    {
        $json = [
            'usuario' => [
                'nome' => 'Adilson',
                'idade' => '39',
            ],
            'usuario2' => [
                'nome' => 'Michele',
                'idade' => '35',
            ],
        ];

        return response($json, 201)->header('Content-Type', 'application/json');
    }



}
