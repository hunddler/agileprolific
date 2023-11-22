<div class="subheader py-2 py-lg-2 px-lg-8 subheader-solid breadcrums" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-start flex-column flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                Impediments Flags
            </h5>
            <!-- Breadcrum Items -->
           <div class="d-flex flex-row page-sub-titles">
                <div class="mr-2">
                    <p>Dashboard</p>
                </div>
                <div class="mr-2">
                    <p>Organization</p>
                </div>
                <div class="mr-2">
                    <a href="{{url('dashboard/organization/contacts')}}" style="text-decoration: none;"></a>
                </div>
                <div class="mr-2">
                    <a  href="{{url('dashboard/organization/'.$organization->slug.'/portfolio/'.$organization->type)}}" style="text-decoration: none;" >{{$organization->business_name}}</a>
                </div>
                <div class="mr-2">
                    <p>Impediments Flags</p>
                </div>
            </div>
            <!--End Breadcrum Items -->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div>
            <div class="btn-group">
              <button type="button" class="btn btn-default" style="border-top-right-radius:0px !important; border-bottom-right-radius:0px !important;"> 
                    <img src="{{url('public/assets/images/icons/filter.svg')}}" width="20">
                    View All
                </button>
              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" style="border-top-left-radius:0px !important; border-bottom-left-radius:0px !important; background-color: #f1f1f1 !important; border:#f1f1f1 !important; padding-left: 0px !important;"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{url('public/assets/images/icons/angle-down.svg')}}" width="20">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">View All</a>
                <a class="dropdown-item" href="#">Archived</a>
              </div>
            </div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#add-flag">Add New</button>
        </div>
    </div>
</div>




<!-- Add Edit Epic -->

<div class="modal fade" id="add-flag" tabindex="-1" role="dialog" aria-labelledby="add-flag" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 626px !important;">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="create-epic">Add Impediment</h5>
                    </div>
                    <div class="col-md-12">
                        <p>Fill out the form, submit and hit the save button.</p>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="{{url('public/assets/images/icons/minus.svg')}}">
                </button>
            </div>
            <div class="modal-body">
                <form id="createimpediment" action="{{ url('dashboard/flags/createimpediment') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $organization->id }}" name="business_units">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" name="flag_title" id="objective-name" required>
                                <label for="objective-name">Flag Title</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group mb-0">
                               <select name="flag_type" class="form-control" id="flag_type">
                                   <option value="">Select Flag Type</option>
                                   <option value="Risk">Risk</option>
                                   <option value="Impediment">Impediment</option>
                                   <option value="Blocker">Blocker</option>
                                   <option value="Action">Action</option>
                               </select>
                                <label for="small-description">Flag Type</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group mb-0">
                                <select required class="form-control" name="flag_assign" id="flag_assign">
                                    <option  value="">Select Flag Assignee</option>
                                    @foreach(DB::table('members')->where('org_user',Auth::id())->get() as $r)                
                                      <option value="{{ $r->id }}">{{ $r->name }}</option>
                                    @endforeach
                                </select>
                                <label for="lead-manager">Flag Assignee</label>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group mb-0">
                                <select name="epic_id" class="form-control" id="options" required>
                                    <option value="">Select Epic</option>
                                    @foreach(DB::table('epics')->where('buisness_unit_id' , $organization->id)->get() as $r)
                                    <option value="{{ $r->id }}">{{ $r->epic_name }}</option>
                                    @endforeach
                                </select>
                                <label for="objective-name">Assign to an Epic (Optional)</label>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group mb-0">
                                <input name="flag_description" type="text" name="description" class="form-control" id="description" required>
                                <label for="description">Small Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-theme btn-block ripple">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>