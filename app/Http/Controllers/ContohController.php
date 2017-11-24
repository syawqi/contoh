<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contoh;

class ContohController extends Controller
{
    public function index()
    {
       $contoh = Contoh::all();
       return view('data', compact('contoh'));
    }
    public function delete($id)
    {
        $contoh = Contoh::find($id);
        $contoh->delete();

        return redirect('/');
    }
    public function edit($id)
    {
        $contoh = Contoh::find($id);
        return view('edit', compact('contoh','id'));
    }
    public function update($id)
    {
        $contoh = Contoh::find($id);

        $contoh->nama = request()->nama;
        $contoh->cerita = request()->cerita;

        $contoh->save();

        return redirect('/');
    }
    public function add(){
      return view('add');
    }

    public function save()
    {
      $contoh = new Contoh;
      $contoh->nama = request()->nama;
      $contoh->cerita = request()->cerita;
      $contoh->like = 0;
      $contoh->save();

      return redirect('/');
    }
}
