@php
    $user = DB::table('members')->where('id' , $r->flag_assign)->first();
@endphp
<div id="{{$r->id}}" class="card impediment-card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <div class="d-flex flex-row">
                <div class="d-flex flex-row mb-2">
                <a href="javascript:void(0)">
                    <img src="{{ url('public/assets/svg/arrow.svg') }}">
                     EPIC{{ $r->id }}
                </a>
            </div>
            <div class="un-blocked ml-2">
                <img src="{{ url('public/assets/svg/unblocked.svg') }}">
                Unblocked
            </div>
            </div>
            @php
                $str = strlen($r->flag_title);
                $strl = strlen($r->flag_description);
            @endphp
            <div>
                <h5>
                    {{ \Illuminate\Support\Str::limit($r->flag_title,40, $end='') }}
                    @if($str > 40)
                        <a href="javascript:void(0);" onclick="loadmore({{$r->id}});" id="toggle-button{{$r->id}}" class="" style="font-size:10px;">More</a>
                    @endif
                </h5>
            </div>
            <div>
                <p class="content show-read-more" id="show-read{{$r->id}}">
                   {{ \Illuminate\Support\Str::limit($r->flag_description,122, $end='') }}
                    @if($strl > 122 )
                    <a href="javascript:void(0);" onclick="loadmoretext({{$r->id}});" id="toggle-button-text{{$r->id}}" class="" style="font-size:10px;">More</a>
                    @endif

                </p>
                <p class="content show-read-more-text" id="show-read-more{{$r->id}}" style="display:none">
                    {{$r->flag_description}}
                    <a href="javascript:void(0);" onclick="seelesstext({{$r->id}});" id="toggle-button-less-text{{$r->id}}" class="" style="font-size:10px">Less</a>
                </p>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <div class="d-flex flex-row align-items-center">
                    <div class="d-flex flex-row align-items-center image-cont pr-3">
                        <div class="pr-1">

                            @if($user->image != NULL)
                            <img class="user-image" src="{{asset('public/assets/images/'.$user->image)}}" alt="Example Image">
                            @else
                            <img class="user-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv1Tt9_33HyVMm_ZakYQy-UgsLjE00biEArg&usqp=CAU" alt="Example Image">
                            @endif
                        </div>
                        <div>
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="vertical-line pr-2">
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <div class="pr-1">
                            <small>{{ DB::Table('flag_comments')->where('epic_id' , $r->id)->where('type' , 'comment')->count() }}</small>
                        </div>
                        <div>
                            <img src="{{ url('public/assets/svg/comments.svg') }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <!-- Escalate -->
                    <div>
                        <button class="btn btn-circle btn-tolbar bg-transparent">
                            <img src="{{ url('public/assets/svg/uparrow.svg') }}">
                        </button>
                    </div>
                    <div>
                        <div class="dropdown d-flex">
                            <button class="btn btn-circle dropdown-toggle btn-tolbar bg-transparent" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ url('public/assets/svg/dropdowndots.svg') }}">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="javascript:void(0)">Archive</a>
                                <a class="dropdown-item" onclick="editflag({{$r->id}})" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" onclick="deleteflag({{$r->id}})" href="javascript:void(0)">Delete</a>
                                <a class="dropdown-item" href="javascript:void(0)">Escalate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>