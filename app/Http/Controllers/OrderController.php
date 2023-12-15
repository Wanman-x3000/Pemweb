<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class OrderController extends Controller
{

public function submitOrder(Request $request)
{
    $data = [
    'nik' => $request->input('nik'),
    'name' => $request->input('name'),
    'provinsi' => $request->input('provinsi'),
    'kota' => $request->input('kota'),
    'telpon' => $request->input('telpon'),
    ];
    return view('dashboardDatadiri', compact('data'));
}
}
