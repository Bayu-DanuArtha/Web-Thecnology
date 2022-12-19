<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class WebController extends Controller
{
    public function market(){
        $data = Obat::all();
        return view('page.market', ['Titel' => "Market Place"])->with('data', $data);
    }

    public function paracetamol(){
        return view('page.paracetamol', ['Titel' => "Paracetamol"]);
    }
    public function admin(){
        $data = Obat::all();
        return view('adminpage.admin', ['Titel' => "Admin"]) ->with('data', $data);
    }
    public function sales(){
       
        return view('adminpage.sales', ['Titel' => "Sales"]);

    }
    public function adminservice(){
       
        return view('adminpage.adminservice', ['Titel' => "Service"]);

    }
    public function service(){
       
        return view('page.service', ['Titel' => "Service"]);

    }
}
