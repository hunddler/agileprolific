<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;

class FlagController extends Controller
{
    public function flags($organizationid , $flagtype)
    {
    	$organization = DB::table('business_units')->where('slug',$organizationid)->first();
        $doneflag = DB::table('epics')->wherenotnull('flag_status')->where('flag_status' , 'doneflag')->orderby('flag_order' , 'asc')->get();
        $inprogress = DB::table('epics')->wherenotnull('flag_status')->where('flag_status' , 'inprogress')->orderby('flag_order' , 'asc')->get();
        $todoflag = DB::table('epics')->wherenotnull('flag_status')->where('flag_status' , 'todoflag')->orderby('flag_order' , 'asc')->get();
    	return view('flags.index',compact('organization','doneflag','inprogress','todoflag')); 
    }
    public function changestatus(Request $request)
    {
        DB::table('epics')->where('id',$request->droppedElId)->update(['flag_status' => $request->parentElId]);
    }
}