<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120223,
            'Name' => 'Trestrantara Wielga Z',
            'Phone' => '0101010',
            'Class' => 'XII RPL 7'
        ];
    }
}
