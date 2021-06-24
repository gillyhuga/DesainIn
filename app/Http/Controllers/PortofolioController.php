<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
class PortofolioController extends Controller
{
    public function index() {
        $portofolios = Portofolio::all();
        return view('/admin/portfolio',compact(['portofolios']));
    } 
    
    public function create() {
        return view('admin\portofolios\create');
    }

    public function store(Request $request) {
        Portofolio::create($request->all());
        return redirect('/admin/portfolio');

    } 
    
    
    public function edit($id) {
        $portofolio = Portofolio::find($id);
        return view('admin\portofolios\edit', compact(['portofolio']));

    } 
    public function update(Request $request, $id ) {
        $portofolio = Portofolio::find($id);
        $portofolio-> update($request->all());  
        return redirect('/admin/portfolio');

    }

    
    public function destroy($id ) {
        $portofolio = Portofolio::find($id);
        $portofolio-> delete();  
        return redirect('/admin/portfolio');

    }
    
}
