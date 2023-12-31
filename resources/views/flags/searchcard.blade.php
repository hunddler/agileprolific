@foreach($flag as $r)
@php
    $user = DB::table('members')->where('id' , $r->flag_assign)->first();
@endphp
<div id="{{$r->id}}" class="card impediment-card">
    <div class="card-body">
        <div class="d-flex flex-column">
            <div class="d-flex flex-row">
                <div class="d-flex flex-row mb-2">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M8.32563 18.9585C8.15897 18.9585 8.02563 18.9252 7.92563 18.8835C7.5923 18.7585 7.02563 18.3502 7.02563 17.0585V11.6835H5.07563C3.95897 11.6835 3.55897 11.1585 3.4173 10.8502C3.27563 10.5335 3.15063 9.89187 3.88397 9.05021L10.1923 1.88352C11.0423 0.916855 11.734 0.983522 12.0673 1.10852C12.4007 1.23352 12.9673 1.64186 12.9673 2.93352V8.30852H14.9173C16.034 8.30852 16.434 8.83354 16.5757 9.14187C16.7173 9.45854 16.8423 10.1002 16.109 10.9419L9.80066 18.1085C9.20899 18.7835 8.69233 18.9585 8.32563 18.9585ZM11.609 2.28352C11.584 2.31686 11.409 2.40019 11.134 2.71686L4.82563 9.88354C4.5923 10.1502 4.55897 10.3169 4.55897 10.3502C4.57563 10.3585 4.72563 10.4419 5.07563 10.4419H7.65063C7.9923 10.4419 8.27563 10.7252 8.27563 11.0669V17.0669C8.27563 17.4835 8.35066 17.6669 8.38399 17.7169C8.40899 17.6835 8.58399 17.6002 8.85899 17.2835L15.1673 10.1169C15.4007 9.8502 15.434 9.68354 15.434 9.6502C15.4173 9.64187 15.2673 9.55854 14.9173 9.55854H12.3423C12.0007 9.55854 11.7173 9.2752 11.7173 8.93354V2.93352C11.7257 2.51686 11.6423 2.34186 11.609 2.28352Z" fill="#547AFF" />
                    </svg> EPIC{{ $r->id }}
                </a>
            </div>
            <div class="un-blocked ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path d="M9.05232 16.4853C7.99482 16.4853 6.92982 16.0803 6.12732 15.2778L2.72982 11.8803C1.90482 11.0553 1.46982 9.91525 1.52232 8.75275L1.70232 5.00275C1.78482 3.21025 3.20232 1.79275 5.00232 1.70275L8.75232 1.52275C9.91482 1.47775 11.0548 1.90525 11.8798 2.73025L15.2773 6.12775C16.8898 7.74025 16.8898 10.3728 15.2773 11.9853L11.9848 15.2778C11.1748 16.0803 10.1173 16.4853 9.05232 16.4853ZM3.52482 11.0778L6.92232 14.4753C7.49232 15.0453 8.24982 15.3603 9.05232 15.3603C9.85482 15.3603 10.6123 15.0453 11.1823 14.4753L14.4748 11.1828C15.0448 10.6128 15.3598 9.85525 15.3598 9.05275C15.3598 8.25025 15.0448 7.49275 14.4748 6.92275L11.0773 3.52525C10.4773 2.92525 9.64482 2.60275 8.80482 2.64775L5.05482 2.82775C3.83232 2.88025 2.87982 3.83275 2.81982 5.04775L2.63982 8.79775C2.60232 9.64525 2.92482 10.4778 3.52482 11.0778Z" fill="#292D32"/>
                      <path d="M7.125 9.5625C5.7825 9.5625 4.6875 8.4675 4.6875 7.125C4.6875 5.7825 5.7825 4.6875 7.125 4.6875C8.4675 4.6875 9.5625 5.7825 9.5625 7.125C9.5625 8.4675 8.4675 9.5625 7.125 9.5625ZM7.125 5.8125C6.405 5.8125 5.8125 6.405 5.8125 7.125C5.8125 7.845 6.405 8.4375 7.125 8.4375C7.845 8.4375 8.4375 7.845 8.4375 7.125C8.4375 6.405 7.845 5.8125 7.125 5.8125Z" fill="#292D32"/>
                    </svg> Unblocked
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                <path d="M9 17.6075C8.4825 17.6075 7.995 17.345 7.65 16.8875L6.525 15.3875C6.5025 15.3575 6.4125 15.32 6.375 15.3125H6C2.8725 15.3125 0.9375 14.465 0.9375 10.25V6.5C0.9375 3.185 2.685 1.4375 6 1.4375H12C15.315 1.4375 17.0625 3.185 17.0625 6.5V10.25C17.0625 13.565 15.315 15.3125 12 15.3125H11.625C11.565 15.3125 11.5125 15.3425 11.475 15.3875L10.35 16.8875C10.005 17.345 9.5175 17.6075 9 17.6075ZM6 2.5625C3.315 2.5625 2.0625 3.815 2.0625 6.5V10.25C2.0625 13.64 3.225 14.1875 6 14.1875H6.375C6.7575 14.1875 7.1925 14.405 7.425 14.7125L8.55 16.2125C8.8125 16.5575 9.1875 16.5575 9.45 16.2125L10.575 14.7125C10.8225 14.3825 11.2125 14.1875 11.625 14.1875H12C14.685 14.1875 15.9375 12.935 15.9375 10.25V6.5C15.9375 3.815 14.685 2.5625 12 2.5625H6Z" fill="#292D32" />
                                <path d="M12.75 7.0625H5.25C4.9425 7.0625 4.6875 6.8075 4.6875 6.5C4.6875 6.1925 4.9425 5.9375 5.25 5.9375H12.75C13.0575 5.9375 13.3125 6.1925 13.3125 6.5C13.3125 6.8075 13.0575 7.0625 12.75 7.0625Z" fill="#292D32" />
                                <path d="M9.75 10.8125H5.25C4.9425 10.8125 4.6875 10.5575 4.6875 10.25C4.6875 9.9425 4.9425 9.6875 5.25 9.6875H9.75C10.0575 9.6875 10.3125 9.9425 10.3125 10.25C10.3125 10.5575 10.0575 10.8125 9.75 10.8125Z" fill="#292D32" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <!-- Escalate -->
                    <div>
                        <button class="btn btn-circle btn-tolbar bg-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M12.0331 6.54141C11.8748 6.54141 11.7165 6.48307 11.5915 6.35807L9.8998 4.66641L8.20814 6.35807C7.96647 6.59974 7.56647 6.59974 7.3248 6.35807C7.08314 6.11641 7.08314 5.71641 7.3248 5.47474L9.45814 3.34141C9.6998 3.09974 10.0998 3.09974 10.3415 3.34141L12.4748 5.47474C12.7165 5.71641 12.7165 6.11641 12.4748 6.35807C12.3498 6.48307 12.1915 6.54141 12.0331 6.54141Z" fill="#787878" />
                                <path d="M9.8999 12.9418C9.55824 12.9418 9.2749 12.6585 9.2749 12.3168V3.8418C9.2749 3.50013 9.55824 3.2168 9.8999 3.2168C10.2416 3.2168 10.5249 3.50013 10.5249 3.8418V12.3168C10.5249 12.6668 10.2416 12.9418 9.8999 12.9418Z" fill="#787878" />
                                <path d="M10.0002 17.7917C5.7085 17.7917 2.7085 14.7917 2.7085 10.5C2.7085 10.1583 2.99183 9.875 3.3335 9.875C3.67516 9.875 3.9585 10.1583 3.9585 10.5C3.9585 14.0583 6.44183 16.5417 10.0002 16.5417C13.5585 16.5417 16.0418 14.0583 16.0418 10.5C16.0418 10.1583 16.3252 9.875 16.6668 9.875C17.0085 9.875 17.2918 10.1583 17.2918 10.5C17.2918 14.7917 14.2918 17.7917 10.0002 17.7917Z" fill="#787878" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <div class="dropdown d-flex">
                            <button class="btn btn-circle dropdown-toggle btn-tolbar bg-transparent" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                        <path d="M9.79437 3.91769C9.79437 4.64349 9.20601 5.23187 8.48019 5.23187C7.75437 5.23187 7.16602 4.64349 7.16602 3.91769C7.16602 3.19189 7.75437 2.60352 8.48019 2.60352C9.20601 2.60352 9.79437 3.19189 9.79437 3.91769Z" fill="#787878" />
                                        <path d="M9.79437 8.51632C9.79437 9.24214 9.20601 9.8305 8.48019 9.8305C7.75437 9.8305 7.16602 9.24214 7.16602 8.51632C7.16602 7.7905 7.75437 7.20215 8.48019 7.20215C9.20601 7.20215 9.79437 7.7905 9.79437 8.51632Z" fill="#787878" />
                                        <path d="M8.48019 14.4301C9.20601 14.4301 9.79437 13.8418 9.79437 13.1159C9.79437 12.3901 9.20601 11.8018 8.48019 11.8018C7.75437 11.8018 7.16602 12.3901 7.16602 13.1159C7.16602 13.8418 7.75437 14.4301 8.48019 14.4301Z" fill="#787878" />
                                    </svg>
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
@endforeach