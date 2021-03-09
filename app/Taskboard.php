<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use DB;

class Taskboard extends Model
{
   public function insert(Request $request)
   {
       $project_title=$request->project_title;
       $frontend=$request->frontend;
       $technology_used=$request->technology_used;
       $description=$request->description;
       $start_date=$request->start_date;
       $due_date=$request->due_date;
       $deliverable_days_no=$request->deliverable_days_no;
      
      $projectid=DB::table('tbl_project_list')->insertGetId([
         'project_title'=>$project_title,
         'frontend'=>$frontend,
         'technology_used'=>$technology_used,
         'description'=>$description,
         'start_date'=>$start_date,
         'due_date'=>$due_date,
         'deliverable_days_no'=>$deliverable_days_no,
         // 'documents'=>$documents,
         'created_by'=>Auth::user()->id,
      ]);   
       return $projectid;
   }
   public function updateRecord(Request $request)
   {
      $project_title=$request->project_title;
      $frontend=$request->frontend;
      $technology_used=$request->technology_used;
      $description=$request->description;
      $start_date=$request->start_date;
      $due_date=$request->due_date;
      $deliverable_days_no=$request->deliverable_days_no;

      $id=$request->id;
     
      $projectid=DB::table('tbl_project_list')->insertGetId([
         'project_title'=>$project_title,
         'frontend'=>$frontend,
         'technology_used'=>$technology_used,
         'description'=>$description,
         'start_date'=>$start_date,
         'due_date'=>$due_date,
         'deliverable_days_no'=>$deliverable_days_no,
         'created_by'=>Auth::user()->id,
      ]);
   }
    public function getTaskboardData()
    {
      $Taskboard=DB::table('tbl_project')->get();
    
      return $Taskboard;
    }
    public function getModuleData()
    {
      $moduledata=DB::table('tbl_module')->where('isdelete',0)->get();
    
      return $moduledata;
    }

    public function inserttask(Request $request)
   {
      // print_r($request);
      // exit;
      //  $id=$request->id;
       $task=$request->task;
      //  $technology_used=$request->technology_used;
      //  $description=$request->description;
      //  $start_date=$request->start_date;
      //  $due_date=$request->due_date;
      //  $deliverable_days_no=$request->deliverable_days_no;
      
      $taskid=DB::table('tbl_tasklist')->insertGetId([
         'task'=>$task,
         // 'frontend'=>$frontend,
         // 'technology_used'=>$technology_used,
         // 'description'=>$description,
         // 'start_date'=>$start_date,
         // 'due_date'=>$due_date,
         // 'deliverable_days_no'=>$deliverable_days_no,
         'created_by'=>Auth::user()->id,
      ]);   
       return $taskid;
   }
}
