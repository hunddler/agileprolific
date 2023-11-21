<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organization;
use App\Models\Epic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;

class FlagController extends Controller
{
    public function flags($organizationid , $flagtype)
    {
    	$organization = DB::table('business_units')->where('slug',$organizationid)->first();
        $doneflag = DB::table('epics')->wherenotnull('flag_status')->where('buisness_unit_id' , $organization->id)->where('flag_status' , 'doneflag')->orderby('flag_order' , 'asc')->get();
        $inprogress = DB::table('epics')->wherenotnull('flag_status')->where('buisness_unit_id' , $organization->id)->where('flag_status' , 'inprogress')->orderby('flag_order' , 'asc')->get();
        $todoflag = DB::table('epics')->wherenotnull('flag_status')->where('buisness_unit_id' , $organization->id)->where('flag_status' , 'todoflag')->orderby('flag_order' , 'asc')->get();
    	return view('flags.index',compact('organization','doneflag','inprogress','todoflag')); 
    }
    public function changestatus(Request $request)
    {
        DB::table('epics')->where('id',$request->droppedElId)->update(['flag_status' => $request->parentElId]);
    }
    public function getflagmodal(Request $request)
    {
        $data = Epic::find($request->id);
        $html = view('flags.editmodal', compact('data'))->render();
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
}