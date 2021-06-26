<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Portofolio;
use App\Models\Order;
class PortofolioController extends Controller
{
    public function index() {
        $portofolios = Portofolio::all();
        return view('/admin/portfolio',compact(['portofolios']));
    } 
    
    public function create() {
        return view('/admin/portofolios/create');
    }

    public function store(Request $request) {
        Portofolio::create($request->all());
        return redirect('portfolio');

    } 
    
    
    public function edit($id) {
        $portofolio = Portofolio::find($id);
        return view('/admin/portofolios/edit', compact(['portofolio']));

    } 
    public function update(Request $request, $id ) {
        $portofolio = Portofolio::find($id);
        $portofolio-> update($request->all());  
        return redirect('portfolio');

    }

    
    public function destroy($id ) {
        $portofolio = Portofolio::find($id);
        $portofolio-> delete();  
        return redirect('portfolio');

    }
    
    public function count() {
        $jumlahorder = DB::table('orders')->count();
        $jumlahporto = DB::table('portofolios')->count();
        return view('admin/dashboard', compact(['jumlahporto','jumlahorder']));
    }

    public function portofolio() {
        $portofolios = Portofolio::all();
        return view('/user/portfolio',compact(['portofolios']));
    }
    

}