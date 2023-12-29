<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pemesanan;
class OrderController extends Controller
{
    public function show()
    {
        $resevarsis = pemesanan::all();
        return view('home.show', compact('resevarsis'));
    }

    public function store(Request $request)
    {
        pemesanan::create($request->all());

        return redirect()->route('home.index')
            ->with('success', 'Penambahan resevarsi berhasil dilakukan.');
    }

}
