<input type="hidden" id="cardid" value="{{ $data->id }}" name="id">
<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="form-group mb-0">
            <input type="text" value="{{ $data->flag_title }}" class="form-control" name="flag_title" id="objective-name" required>
            <label for="objective-name">Flag Title</label>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="form-group mb-0">
           <select name="flag_type" class="form-control" id="flag_type">
               <option value="">Select Flag Type</option>
               <option value="Risk" @if($data->flag_type == 'Risk') selected @endif >Risk</option>
               <option value="Impediment" @if($data->flag_type == 'Impediment') selected @endif>Impediment</option>
               <option value="Blocker" @if($data->flag_type == 'Blocker') selected @endif>Blocker</option>
               <option value="Action" @if($data->flag_type == 'Action') selected @endif>Action</option>
           </select>
            <label for="small-description">Flag Type</label>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="form-group mb-0">
            <select class="form-control" name="flag_assign" id="flag_assign">
                <option  value="">Select Flag Assignee</option>
                @foreach(DB::table('members')->where('org_user',Auth::id())->get() as $r)                
                  <option @if($r->id  == $data->flag_assign) selected @endif value="{{ $r->id }}">{{ $r->name }}</option>
                @endforeach
            </select>
            <label for="lead-manager">Flag Assignee</label>
        </div>
    </div>
    <!-- <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="form-group mb-0">
            <input type="text" class="form-control" id="objective-name" required>
            <label for="objective-name">Assign to an Epic (Optional)</label>
        </div>
    </div> -->
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="form-group mb-0">
            <input name="flag_description" value="{{ $data->flag_description }}" type="text" name="description" class="form-control" id="description" required>
            <label for="description">Small Description</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <button data-id='{{ $data->id }}' class="btn btn-primary btn-lg btn-theme btn-block ripple" id="updatebutton">Update</button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="d-flex flex-row align-items-center justify-content-between comment-header">
            <div>
                <h4>Comments</h4>
            </div>
            <div class="dropdown">
              <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="7" viewBox="0 0 11 7" fill="none">
                  <path d="M10.8339 0.644857C10.6453 0.456252 10.3502 0.439106 10.1422 0.593419L10.0826 0.644857L5.49992 5.2273L0.917236 0.644857C0.72863 0.456252 0.433494 0.439106 0.225519 0.593419L0.165935 0.644857C-0.0226701 0.833463 -0.0398163 1.1286 0.114497 1.33657L0.165935 1.39616L5.12427 6.35449C5.31287 6.5431 5.60801 6.56024 5.81599 6.40593L5.87557 6.35449L10.8339 1.39616C11.0414 1.18869 11.0414 0.852323 10.8339 0.644857Z" fill="#787878"/>
                </svg> Order By
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Latest</a>
                <a class="dropdown-item" href="#">Older</a>
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="d-flex flex-column">
            <div>
                <div class="form-group mb-0">
                    <input type="text" class="form-control" id="objective-name" required>
                    <label for="objective-name">Write Comment</label>
                </div>
            </div>
            <div>
                <button class="btn btn-default btn-sm">Cancel</button>
                <button class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4 comment-area">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card comment-card">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="d-flex flex-row align-items-center">
                            <div>
                                <img class="user-image" src="https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bWFufGVufDB8fDB8fHww" style="width:34px; height:34px; background-size:cover">
                            </div>
                            <div class="d-flex flex-column">
                                <div>
                                    <h5>Hadilton</h5>
                                    <small>12 Jan 2023, 12:00 pm</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="pr-2">
                                <button class="btn-circle btn-tolbar">
                                    <img src="{{ url('public/assets/images/icons/edit.svg') }}">
                                </button>
                            </div>
                            <div>
                                <button class="btn-circle btn-tolbar">
                                    <img src="{{ url('public/assets/images/icons/delete.svg') }}">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>Delve into the challenges posed by recurring technical glitches and explore strategies to overcome these hurdles in a rapidly evolving digital landscape.</p>
                    </div>
                    <div>
                        <button class="btn btn-default btn-sm">Reply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>