<?php

namespace App\Http\Controllers;

use App\Models\Brrow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\not_return_book;
use Illuminate\Support\Facades\DB;

class BrrowController extends Controller
{
    public function index()
    {
       $brrow=Brrow::all();
       return view('Admin.showbrrow',compact('brrow'));
    }
    public function notification($id){
        $massage="Your Book Has Expired, Please Return The Book";
                 $users=User::where('id',$id)->get();
         Notification::send($users,new not_return_book($massage));
         return back();
    }
    public function mostbrrowed()
    {
        $i=0;
        $id=[];
        $count=0;
        $users=DB::table('brrows')->get();
        foreach($users as $u){
            foreach($users as $us){
                if($us->user_id==$u->user_id){
                $count++;}
                if($count>4){
               $id[$i]=$us->user_id;
               $i++;
              $count=0;
            }
        }
    }
    return $id;
}
    public function showNot($id)
    {
        DB::table('notifications')->where('id',$id)->update(['read_at'=>now()]);
        return redirect()->route('basket');
    }

    public function create()
    {
        $brrow=Brrow::where('lastData','<=',now())->get();
        return view('Admin.shownotreturn',compact('brrow'));
    }
    public function store(Request $request,$id)
    {
        Brrow::create([
            'user_id'=>Auth::id(),
            'book_id'=>$id,
            'firstData'=>now(),
            'lastData'=>$request->lastdata,
           'numbercart'=>$request->numbercart]);
        return redirect()->route('basket');
    }
    public function show(Brrow $brrow)
    {}
    public function Basket()
    {
        $total=0;
        $brrow=Brrow::where('user_id',Auth::id())->get();
        foreach($brrow as $b){
          $total+=$b->book->price;
        }
        return view('brrow',compact('brrow','total'));
    }
    public function edit(Brrow $brrow)
    {}
    public function update(Request $request, Brrow $brrow)
    {}
    public function destroy($id)
    {
        Brrow::findorfail($id)->delete();
        return redirect()->back();
    }
}
