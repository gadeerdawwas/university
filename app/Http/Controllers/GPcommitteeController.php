<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use App\Models\order_group;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Task_result;

class GPcommitteeController extends Controller
{
    public function index()
    {
        $prject_count=Project::count();

        $projects=Project::where('user_id',auth()->user()->id)->pluck('id');
        $order_group_count=order_group::orderBy('id','desc')->count();
        $order_group=order_group::orderBy('id','desc')->get();

        $Task=Task::count();

        // return $prject_count;
        return view('dashboard.GP.profile',compact('Task','prject_count','order_group_count','order_group'));
    }

    public function projects()
    {
        $projects=Project::orderBy('id','desc')->paginate(10);

        // return $projects;
       return view('dashboard.GP.project',compact('projects'));
    }

    public function group()
    {
        $users=User::all();
        $order_group=order_group::where('status',1)->orderBy('id','desc')->paginate(10);

     return view('dashboard.GP.group',compact('order_group','users'));
    }

    public function alltask()
    {
        $tasks= Task_result::orderBy('id', 'desc')->paginate(10);
        return view('dashboard.GP.submittask',compact('tasks'));
    }
    public function alluser()
    {
        $users= User::where('is_student',0)->orderBy('id', 'desc')->paginate(10);
        return view('dashboard.GP.alluser',compact('users'));
    }
    public function allsupervisor()
    {
        $users= User::where('is_student',1)->orderBy('id', 'desc')->paginate(10);
        return view('dashboard.GP.allsupervisor',compact('users'));
    }
    public function searchuser(Request $request)
    {

        if ($request->search) {
            $users=User::where('first_name','like', '%' . $request->search . '%')->orWhere('last_name','like', '%' . $request->search . '%')->where('is_student',0)->orderBy('id','asc')->paginate(15);
            return view('dashboard.GP.alluser',compact('users'));
        }
        $users= User::where('is_student',0)->orderBy('id', 'desc')->paginate(10);
        return view('dashboard.GP.alluser',compact('users'));
    }
    public function searchsupervisor(Request $request)
    {

        if ($request->search) {
            $users=User::where('first_name','like', '%' . $request->search . '%')->orWhere('last_name','like', '%' . $request->search . '%')->where('is_student',1)->orderBy('id','asc')->paginate(15);
            return view('dashboard.GP.allsupervisor',compact('users'));
        }
        $users= User::where('is_student',1)->orderBy('id', 'desc')->paginate(10);
        return view('dashboard.GP.allsupervisor',compact('users'));
    }
    public function searchproject(Request $request)
    {

        if ($request->search) {
            $projects=Project::where('title','like', '%' . $request->search . '%')->orderBy('id','desc')->paginate(10);

            return view('dashboard.GP.project',compact('projects'));
        }
        $projects=Project::orderBy('id','desc')->paginate(10);

        // return $projects;
       return view('dashboard.GP.project',compact('projects'));
    }

}
