<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vender;
use Illuminate\Http\Request;

class VenderController extends Controller
{
    public function index($id){
        $row = Vender::find($id);
        return view('admin.vender.index', compact('row'));
    }

    public function update($id){
        $row = Vender::find($id);
        return view('admin.vender.index', compact('row'));
    }
}
