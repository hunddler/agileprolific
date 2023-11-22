<?php

namespace App\Http\Controllers;
use App\Helpers\Cmf;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organization;
use App\Models\Epic;
use App\Models\flags;
use App\Models\flag_comments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;

class FlagController extends Controller
{
    public function flags($organizationid , $flagtype)
    {
    	$organization = DB::table('business_units')->where('slug',$organizationid)->first();
        $doneflag = Epic::wherenotnull('flag_status')->wherenotnull('flag_title')->wherenull('trash')->where('buisness_unit_id' , $organization->id)->where('flag_status' , 'doneflag')->orderby('flag_order' , 'asc')->get();
        $inprogress = Epic::wherenotnull('flag_status')->wherenotnull('flag_title')->wherenull('trash')->where('buisness_unit_id' , $organization->id)->where('flag_status' , 'inprogress')->orderby('flag_order' , 'asc')->get();
        $todoflag = Epic::wherenotnull('flag_status')->wherenotnull('flag_title')->wherenull('trash')->where('buisness_unit_id' , $organization->id)->where('flag_status' , 'todoflag')->orderby('flag_order' , 'asc')->get();
    	return view('flags.index',compact('organization','doneflag','inprogress','todoflag')); 
    }
    public function searchflag(Request $request)
    {
        $organization = DB::table('business_units')->where('id',$request->organization_id)->first();
        $flag = Epic::wherenotnull('flag_status')->wherenotnull('flag_title')->wherenull('trash')->where('buisness_unit_id' , $organization->id)->where('flag_status' , $request->id)->where('flag_title', 'LIKE', "%$request->value%")->orderby('flag_order' , 'asc')->get();
        $html = view('flags.searchcard', compact('flag'))->render();
        return $html;
    }
    public function changestatus(Request $request)
    {
        DB::table('epics')->where('id',$request->droppedElId)->update(['flag_status' => $request->parentElId]);
    }
    public function getflagmodal(Request $request)
    {
        $data = Epic::find($request->id);
        $comments = flag_comments::where('epic_id' , $request->id)->wherenull('comment_id')->orderby('id' , 'desc')->get();
        $html = view('flags.editmodal', compact('data','comments'))->render();
        return $html;
    }
    public function updateflag(Request $request)
    {
        $update = Epic::find($request->id);
        $update->flag_title = $request->flag_title;
        $update->flag_description = $request->flag_description;
        $update->flag_type = $request->flag_type;
        $update->flag_assign = $request->flag_assign;
        $update->save();
        $r = $update;
        $html = view('flags.simplecard', compact('r'))->render();
        return $html;
    }
    public function savecomment(Request $request)
    {
        $addcomment = new flag_comments();
        $addcomment->epic_id = $request->epic_id;
        $addcomment->user_id = $request->user_id;
        $addcomment->comment = $request->comment;
        $addcomment->type = 'comment';
        $addcomment->save();
        $comments = flag_comments::where('epic_id' , $request->epic_id)->wherenull('comment_id')->orderby('id' , 'desc')->get();
        $html = view('flags.allcomments', compact('comments'))->render();
        return $html;
    }

    public function savereply(Request $request)
    {
        $addcomment = new flag_comments();
        $addcomment->epic_id = $request->epic_id;
        $addcomment->user_id = $request->user_id;
        $addcomment->comment = $request->comment;
        $addcomment->type = 'reply';
        $addcomment->comment_id = $request->comment_id;
        $addcomment->save();
        $comments = flag_comments::where('epic_id' , $request->epic_id)->wherenull('comment_id')->orderby('id' , 'desc')->get();
        $html = view('flags.allcomments', compact('comments'))->render();
        return $html;
    }
    public function deletecomment(Request $request)
    {
        $comment = flag_comments::find($request->id);
        flag_comments::where('id' , $request->id)->delete();
        flag_comments::where('comment_id' , $request->id)->delete();
        $comments = flag_comments::where('epic_id' , $comment->epic_id)->wherenull('comment_id')->orderby('id' , 'desc')->get();
        $html = view('flags.allcomments', compact('comments'))->render();
        return $html;
    }
    public function updatecomment(Request $request)
    {
        $addcomment = flag_comments::find($request->comment_id);
        $addcomment->comment = $request->comment;
        $addcomment->save();
        $comments = flag_comments::where('epic_id' , $addcomment->epic_id)->wherenull('comment_id')->orderby('id' , 'desc')->get();
        $html = view('flags.allcomments', compact('comments'))->render();
        return $html;
    }
    public function orderbycomment(Request $request)
    {
        $comments = flag_comments::where('epic_id' , $request->epic_id)->wherenull('comment_id')->orderby('id' , $request->id)->get();
        $html = view('flags.allcomments', compact('comments'))->render();
        return $html;
    }
    public function deleteflag(Request $request)
    {
        DB::table('epics')->where('id',$request->delete_id)->update([
            'flag_type' => NULL,
            'flag_assign' => NULL,
            'flag_title' => NULL,
            'flag_description' => NULL,
            'flag_status' => NULL,
            'flag_order' => NULL,
        ]);
    }
    public function createimpediment(Request $request)
    {
        $flag = new flags();
        $flag->business_units = $request->business_units;
        $flag->epic_id = $request->epic_id;
        $flag->flag_type = $request->flag_type;
        $flag->flag_assign = $request->flag_assign;
        $flag->flag_title = $request->flag_title;
        $flag->flag_description = $request->flag_description;
        $flag->flag_status = 'todoflag';
        $flag->save();
        return redirect()->back()->with('message', 'Flag Created Successfully!!');
    }
}