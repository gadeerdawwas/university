<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Project;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $projects=Project::take(4)->get();
        $Group=Group::where('status',1)->take(4)->get();
        $Users=User::where('is_student',2)->take(4)->get();
        // return view();
        return view('welcome',compact('projects','Group','Users'));
    }
    public function supervisor()
    {
        $projects=Project::take(4)->get();
        $Group=Group::where('status',1)->take(4)->get();
        $Users=User::where('is_student',2)->take(4)->get();
        $supervisors=User::where('is_student',1)->get();
        // return view();
        return view('supervisor',compact('supervisors','projects','Group','Users'));
    }
    public function supervisorDetail($id)
    {
        $projects=Project::take(4)->get();
        $Group=Group::where('status',1)->take(4)->get();
        $Users=User::where('is_student',2)->take(4)->get();
        $supervisors=User::find($id);
        // return $supervisors;
        return view('superedatil',compact('supervisors','projects','Group','Users'));
    }
}
