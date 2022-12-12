<?php

namespace App\Http\Controllers;

use App\Models\Brrow;
use App\Models\Catigory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatigoryController extends Controller
{
    public function index()
    {
        if(auth()->user()->is_admin==false){
        $Catigory=DB::table('catigories')->get();
        return view('show_cotigory',compact('Catigory'));
        }
        if(auth()->user()->is_admin==true){
            $users=DB::table('users')->count()-1;
            $books=DB::table('books')->count();
            $brrowEnd=Brrow::where('lastData','<=',now())->count();
            $brrows=DB::table('brrows')->count();
            $categories=DB::table('catigories')->count();
            return view('Admin.management',compact('users','books','categories','brrows','brrowEnd'));
        }
    }
    public function adminshow(){
        $Catigory=DB::table('catigories')->get();
        return view('Admin.catigory',compact('Catigory'));
    }
    public function create()
    {}
    public function store(Request $request)
    {
        DB::table('catigories')->insert([
            'name'=>$request->name,
        ]);
        return redirect()->route('admincatigory');
    }
    public function show(Catigory $catigory)
    {}
    public function edit($id)
    {
        $edit=DB::table('catigories')->where('id',$id)->first();
        return view('Admin.editcatigory',compact('edit'));
    }
    public function update(Request $request,$id)
    {
        DB::table('catigories')->where('id',$id)->update([
           'name'=>$request->name,]);
        return redirect()->route('admincatigory');
    }
    public function destroy($id)
    {
        DB::table('catigories')->where('id',$id)->delete();
        return back();
    }
}
