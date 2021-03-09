<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use DB;

class ProjectList extends Model
{
   public function insert(Request $request)
   {
      echo $project_title=$request->project_title;
      echo $frontend=$request->frontend;
      echo $technology_used=$request->technology_used;
      echo $description=$request->description;
      echo $start_date=$request->start_date;
      echo $due_date=$request->due_date;
      echo $deliverable_days_no=$request->deliverable_days_no;
      
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
    public function getProjectData()
    {
      $projectdata=DB::table('tbl_project_list')->get();
      return $projectdata;
    }
}
