<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\ProjectList;
use DB;

class ProjectListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->ProjectList = new ProjectList();
    }

    public function index()
    {
      
        if(Auth::user()->name !='' &&Auth::user()->name != NULL){
            $projectdata=$this->ProjectList->getProjectData();
            return view('ProjectList.index',['projectdata'=>$projectdata]);
        }
        else{
            return redirect('/login');
        }
    }

    public function add()
    {
        if(Auth::user()->name !='' &&Auth::user()->name != NULL){      
            return view('ProjectList/add');
        }
        else{
            return redirect('/login');
        }
    }


public function insert(Request $request)
{
    $Projectid=$request->id;
    if($Projectid!='')
    {
        $this->Projectid->updateRecord($request);
        $message='Project List updated Successfully';
    }
   else
   {
        $Projectid=$this->ProjectList->insert($request);
        $message='Project List Added Successfully';
   }
  return redirect('ProjectList/addModale/'.$Projectid)->with($message);
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
