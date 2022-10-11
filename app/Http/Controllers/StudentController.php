<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Project;
use App\Models\Userinfo;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function index()
    {
        $info=Userinfo::where('user_id',auth()->user()->id)->first();
        // $info=Userinfo::find(3);
        // return $info->User->id;
        return view('dashboard.user.profile',compact('info'));
    }


   public function info(Request $request)
   {
        // return $request;
        $files_name='';
        if ($request->has('file')) {
            $FileEx = $request->file('file')->getClientOriginalExtension();
            $files_name = time() . '_' . rand() . '.' . $FileEx;
            $request->file('file')->move(public_path('upload/info'), $files_name);

        }
        Userinfo::create([
            'user_id' => auth()->user()->id,
            'cv' => $files_name,
            'level' => $request->level,
            'major' => $request->major,
            'GPA' => $request->GPA,
        ]);
        return redirect()->route('student.index')->with('success', 'Data saved successfully');

   }
   public function project()
   {
        $projects=Project::orderBy('id','desc')->paginate(10);
        // $projects=Project::find(1);
        // return $projects->User->first_name;
        return view('dashboard.group.index',compact('projects'));
   }

   public function applyproject(Request $request ,$id)
   {
        // return $request;
        Group::create([
            'project_id' => $id,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('student.project')->with('success', 'Apply successfully');

   }

}
