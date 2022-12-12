<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index($id)
    {
        $book=DB::table('Books')->where('cotigory_id',$id)->get();
        return view('showbooks',compact('book','id'));
    }
    public function admin(){
        $Catigory=DB::table('catigories')->get();
        return view('Admin.catigory',compact('Catigory'));
    }

    public function index1($id)
    {
        $book=DB::table('Books')->where('cotigory_id',$id)->get();
        return view('Admin.showbooks',compact('book','id'));
    }

    public function search(Request $request,$id)
    {
        if ($request->namebook != null) {
            $namebook = $request->namebook;
            $filter = Book::where('name', 'like', '%' . $namebook . '%')->get();
            if ($filter->count()) {
                return view('showbooks', [App\Http\Controllers\BookController::class, 'index'])->with([
                    'book' => $filter,
                    'id'=>$id
                ]);
            }
            else{return redirect()->route('showbooks',$id);}
        }
        if ($request->author_name != null) {
            $author_name = $request->author_name;
            $filter = Book::where('author_name', 'like', '%' . $author_name . '%')->get();
            if ($filter->count()) {
                return view('showbooks', [App\Http\Controllers\BookController::class, 'index'])->with([
                    'book' => $filter,
                    'id'=>$id
                ]);
            }
            else{return redirect()->route('showbooks',$id);}
        }
         if($request->hiredate !=null){
            $hiredate =$request->hiredate;
            $filter = Book::where('history_bublish',$hiredate)->get();
            if($filter->count()==0){return redirect()->route('showbooks',$id);}
            elseif ($filter->count()) {
                return view('showbooks', [App\Http\Controllers\BookController::class, 'index'])->with([
                    'book' => $filter,
                    'id'=>$id
                ]);
            }
        }
    }
    public function create($id)
    {
        $cotigory_id=$id;
        return view('Admin.addbook',compact('cotigory_id'));
    }

    public function store(Request $request)
    {
        $image=$request->file('picture')->getClientOriginalName();
        $path= $request->file('picture')->storeAs('books',$image,'imges');
        $request->validate([
            'name' => 'required',
            'author_name' => 'required',
            'history_bublish' => 'required',
            'price' => 'required',
            'count'=>'required',
            'picture'=>'required'
        ]);
            DB::table('books')->insert([
                'name'=>$request->name,
                'author_name'=>$request->author_name,
                'history_bublish'=>$request->history_bublish,
                'picture'=>$path,
                'price'=>$request->price,
                'count'=>$request->count,
                'user_id'=>Auth::id(),
                'cotigory_id'=>$request->cotigory_id]);
            return redirect()->route('admin.showbooks',$request->cotigory_id);
    }

    public function show($id)
    {
        $book_id=$id;
       $Count= DB::table('books')->where('id',$id)->first();
        DB::table('books')->where('id',$id)->update([
            'count'=>$Count->count-1]);
        return view('pay',compact('book_id'));

    }
    public function show1(Book $book,$id)
    {
        $book_id=$id;
        return view('formcard',compact('book_id'));
    }
    public function show2(Book $book,$id)
    {
        $book_id=$id;
        return view('dateBrrow',compact('book_id'));
    }

    public function edit($id)
    {
      $edit=DB::table('books')->where('id',$id)->first();
        return view('Admin.editbook',compact('edit'));
    }

    public function update(Request $request,$id)
    {
 
        $request->validate([
            'name' => 'required',
            'author_name' => 'required',
            'history_bublish' => 'required',
            'price' => 'required',
            'count'=>'required',
        ]);
            DB::table('books')->where('id',$id)->update([
                'name'=>$request->name,
                'author_name'=>$request->author_name,
                'history_bublish'=>$request->history_bublish,
                'price'=>$request->price,
                'count'=>$request->count,
                'user_id'=>Auth::id(),
                'cotigory_id'=>$request->cotigory_id]);
            return redirect()->route('admin.showbooks',$request->cotigory_id);
    }

    public function destroy($id)
    {
        Book::findorfail($id)->delete();
        return redirect()->back();
    }
}
