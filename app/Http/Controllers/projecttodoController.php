<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class projecttodoController extends Controller
{
    public function index()
    {
        if(Auth::user()->name !='' &&Auth::user()->name != NULL){
           
            return view('/projecttodo');
        }
        else{
            return redirect('/login');
        }
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
