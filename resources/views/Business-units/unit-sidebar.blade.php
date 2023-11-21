
<div class="aside">
    <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 100%; height: 100vh;">
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center sidebar" id="navbarSupportedContent">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" data-original-title="Go back">
                <a href="{{url('dashboard/organization/Business-Units')}}" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <path opacity="0.4" d="M9.11232 2.3335H18.8773C23.1357 2.3335 25.6673 4.86516 25.6673 9.11183V18.8768C25.6673 23.1235 23.1357 25.6552 18.889 25.6552H9.11232C4.86565 25.6668 2.33398 23.1352 2.33398 18.8885V9.11183C2.33398 4.86516 4.86565 2.3335 9.11232 2.3335Z" fill="#787878"/>
                      <path d="M6.38167 13.3818L11.3867 8.3768C11.725 8.03846 12.285 8.03846 12.6233 8.3768C12.9617 8.71513 12.9617 9.27513 12.6233 9.61346L9.11167 13.1251H21C21.4783 13.1251 21.875 13.5218 21.875 14.0001C21.875 14.4785 21.4783 14.8751 21 14.8751H9.11167L12.6233 18.3868C12.9617 18.7251 12.9617 19.2851 12.6233 19.6235C12.4483 19.7985 12.2267 19.8801 12.005 19.8801C11.7833 19.8801 11.5617 19.7985 11.3867 19.6235L6.38167 14.6185C6.21833 14.4551 6.125 14.2335 6.125 14.0001C6.125 13.7668 6.21833 13.5451 6.38167 13.3818Z" fill="#787878"/>
                    </svg>
                </a>
            </li>
            <div class="border-top py-2"></div>
            <li data-toggle="tooltip" id="removeTooltipButton" data-placement="top" data-original-title="Business Units" >
                <a href="#panel-unit" class="nav-link" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none" >
                      <path opacity="0.4" d="M2.44922 25.6667V7.03507C2.44922 4.69007 3.61595 3.51172 5.93761 3.51172H13.2059C15.5276 3.51172 16.6826 4.69007 16.6826 7.03507V25.6667" fill="#787878"/>
                      <path d="M12.5426 10.5H6.76758C6.28924 10.5 5.89258 10.1033 5.89258 9.625C5.89258 9.14667 6.28924 8.75 6.76758 8.75H12.5426C13.0209 8.75 13.4176 9.14667 13.4176 9.625C13.4176 10.1033 13.0209 10.5 12.5426 10.5Z" fill="#787878"/>
                      <path d="M12.5426 14.875H6.76758C6.28924 14.875 5.89258 14.4783 5.89258 14C5.89258 13.5217 6.28924 13.125 6.76758 13.125H12.5426C13.0209 13.125 13.4176 13.5217 13.4176 14C13.4176 14.4783 13.0209 14.875 12.5426 14.875Z" fill="#787878"/>
                      <path d="M9.625 26.5417C9.14667 26.5417 8.75 26.1451 8.75 25.6667V21.2917C8.75 20.8134 9.14667 20.4167 9.625 20.4167C10.1033 20.4167 10.5 20.8134 10.5 21.2917V25.6667C10.5 26.1451 10.1033 26.5417 9.625 26.5417Z" fill="#787878"/>
                      <path d="M26.8327 24.7916H24.1843V21.2916C25.2927 20.93 26.0977 19.8916 26.0977 18.6666V16.3333C26.0977 14.805 24.8493 13.5566 23.321 13.5566C21.7927 13.5566 20.5443 14.805 20.5443 16.3333V18.6666C20.5443 19.88 21.3376 20.9066 22.4226 21.28V24.7916H1.16602C0.687682 24.7916 0.291016 25.1883 0.291016 25.6666C0.291016 26.145 0.687682 26.5416 1.16602 26.5416H23.251C23.2743 26.5416 23.286 26.5533 23.3093 26.5533C23.3327 26.5533 23.3444 26.5416 23.3677 26.5416H26.8327C27.311 26.5416 27.7077 26.145 27.7077 25.6666C27.7077 25.1883 27.311 24.7916 26.8327 24.7916Z" fill="#787878"/>
                    </svg>
                </a>
            </li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Portfolio">
                <a href="{{url('dashboard/organization/'.$organization->slug.'/portfolio/'.$organization->type)}}" @if (url()->current() == url('dashboard/organization/'.$organization->slug.'/portfolio/'.$organization->type)) class="nav-link active" @else class="nav-link"  @endif>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <path opacity="0.4" d="M24.5 2.3335V16.4502C24.5 18.6668 23.3333 19.8335 21.1167 19.8335H6.88333C4.66666 19.8335 3.5 18.6668 3.5 16.4502V2.3335H24.5Z" fill="#787878"/>
                      <path d="M25.6673 3.2085H2.33398C1.85565 3.2085 1.45898 2.81183 1.45898 2.3335C1.45898 1.85516 1.85565 1.4585 2.33398 1.4585H25.6673C26.1457 1.4585 26.5423 1.85516 26.5423 2.3335C26.5423 2.81183 26.1457 3.2085 25.6673 3.2085Z" fill="#787878"/>
                      <path d="M19.4477 26.0635C19.296 26.3668 18.981 26.5418 18.666 26.5418C18.5377 26.5418 18.3977 26.5068 18.281 26.4485L13.9993 24.3135L9.71765 26.4485C9.60098 26.5068 9.461 26.5418 9.33267 26.5418C9.01767 26.5418 8.70265 26.3668 8.55098 26.0635C8.32932 25.6202 8.50435 25.0951 8.94768 24.8851L13.1243 22.7968V19.8335H14.8743V22.7968L19.051 24.8851C19.4943 25.0951 19.6693 25.6202 19.4477 26.0635Z" fill="#787878"/>
                      <path d="M8.74975 13.7082C8.50475 13.7082 8.2481 13.6033 8.0731 13.3933C7.7581 13.0199 7.8164 12.4716 8.18974 12.1566L11.8648 9.08826C12.2031 8.80826 12.6347 8.69159 13.0431 8.76159C13.4631 8.83159 13.8248 9.08823 14.0464 9.46156L15.2714 11.5032L18.6897 8.6566C19.0631 8.3416 19.6114 8.3999 19.9264 8.77323C20.2414 9.14657 20.1831 9.6949 19.8098 10.0099L16.1347 13.0782C15.7964 13.3582 15.3648 13.4749 14.9564 13.4049C14.5364 13.3349 14.1747 13.0783 13.9531 12.7049L12.7281 10.6633L9.30976 13.5099C9.14643 13.6382 8.94808 13.7082 8.74975 13.7082Z" fill="#787878"/>
                    </svg>
                    
                </a>
            </li>
            
            <li >
                  <a href="{{url('dashboard/organization/'.$organization->slug.'/Value-Streams')}}" @if (url()->current() == url('dashboard/organization/'.$organization->slug.'/Value-Streams')) class="nav-link active" @else   @endif  class="nav-link" data-toggle="tooltip" data-placement="right" data-original-title="Value Streams">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19.3697 4.89012L13.5097 2.28012C12.6497 1.90012 11.3497 1.90012 10.4897 2.28012L4.62969 4.89012C3.14969 5.55012 2.92969 6.45012 2.92969 6.93012C2.92969 7.41012 3.14969 8.31012 4.62969 8.97012L10.4897 11.5801C10.9197 11.7701 11.4597 11.8701 11.9997 11.8701C12.5397 11.8701 13.0797 11.7701 13.5097 11.5801L19.3697 8.97012C20.8497 8.31012 21.0697 7.41012 21.0697 6.93012C21.0697 6.45012 20.8597 5.55012 19.3697 4.89012Z" fill="#787878"/>
                        <path opacity="0.4" d="M12.0003 17.04C11.6203 17.04 11.2403 16.96 10.8903 16.81L4.15031 13.81C3.12031 13.35 2.32031 12.12 2.32031 10.99C2.32031 10.58 2.65031 10.25 3.06031 10.25C3.47031 10.25 3.80031 10.58 3.80031 10.99C3.80031 11.53 4.25031 12.23 4.75031 12.45L11.4903 15.45C11.8103 15.59 12.1803 15.59 12.5003 15.45L19.2403 12.45C19.7403 12.23 20.1903 11.54 20.1903 10.99C20.1903 10.58 20.5203 10.25 20.9303 10.25C21.3403 10.25 21.6703 10.58 21.6703 10.99C21.6703 12.11 20.8703 13.35 19.8403 13.81L13.1003 16.81C12.7603 16.96 12.3803 17.04 12.0003 17.04Z" fill="#787878"/>
                        <path opacity="0.4" d="M12.0003 22C11.6203 22 11.2403 21.92 10.8903 21.77L4.15031 18.77C3.04031 18.28 2.32031 17.17 2.32031 15.95C2.32031 15.54 2.65031 15.21 3.06031 15.21C3.47031 15.21 3.80031 15.54 3.80031 15.95C3.80031 16.58 4.17031 17.15 4.75031 17.41L11.4903 20.41C11.8103 20.55 12.1803 20.55 12.5003 20.41L19.2403 17.41C19.8103 17.16 20.1903 16.58 20.1903 15.95C20.1903 15.54 20.5203 15.21 20.9303 15.21C21.3403 15.21 21.6703 15.54 21.6703 15.95C21.6703 17.17 20.9503 18.27 19.8403 18.77L13.1003 21.77C12.7603 21.92 12.3803 22 12.0003 22Z" fill="#787878"/>
                        </svg>
                </a>
            </li>
            
            <li data-toggle="tooltip" data-placement="right" data-original-title="Backlog">
                <a href="{{url('dashboard/organization/'.$organization->slug.'/BU-Backlog')}}" @if (url()->current() == url('dashboard/organization/'.$organization->slug.'/BU-Backlog')) class="nav-link active" @else class="nav-link"  @endif>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <path opacity="0.4" d="M18.0606 3.5H8.77398C4.74898 3.5 2.33398 5.90333 2.33398 9.94V19.215C2.33398 23.2633 4.74898 25.6667 8.77398 25.6667H18.049C22.0857 25.6667 24.489 23.2633 24.489 19.2267V9.94C24.5007 5.90333 22.0856 3.5 18.0606 3.5Z" fill="#787878"/>
                      <path d="M24.5227 3.47683C22.4344 1.37683 20.3927 1.33016 18.2461 3.47683L16.9277 4.78349C16.8111 4.90016 16.7761 5.06349 16.8227 5.21516C17.6394 8.07349 19.9261 10.3602 22.7844 11.1768C22.8194 11.1885 22.8777 11.1885 22.9127 11.1885C23.0294 11.1885 23.1461 11.1418 23.2277 11.0602L24.5227 9.75349C25.5844 8.69182 26.1094 7.67683 26.1094 6.63849C26.1094 5.58849 25.5844 4.55016 24.5227 3.47683Z" fill="#787878"/>
                      <path d="M20.8366 12.1566C20.5216 12.005 20.2183 11.8533 19.9383 11.6783C19.705 11.5383 19.4716 11.3866 19.25 11.2233C19.0633 11.1066 18.8533 10.9316 18.6433 10.7566C18.62 10.745 18.55 10.6866 18.4566 10.5933C18.095 10.3016 17.71 9.90498 17.3483 9.47331C17.325 9.44998 17.255 9.37998 17.1966 9.27498C17.08 9.14665 16.905 8.92498 16.7533 8.67998C16.625 8.51665 16.4733 8.28331 16.3333 8.03831C16.1583 7.74665 16.0066 7.45498 15.8666 7.15165C15.715 6.82498 15.5983 6.52165 15.4933 6.22998L9.21662 12.5066C8.80829 12.915 8.41162 13.685 8.32995 14.2566L7.82829 17.7333C7.72329 18.4683 7.92162 19.1566 8.37662 19.6116C8.76162 19.9966 9.28662 20.195 9.86995 20.195C9.99829 20.195 10.1266 20.1833 10.255 20.1716L13.72 19.6816C14.2916 19.6 15.0616 19.215 15.47 18.795L21.7466 12.5183C21.455 12.425 21.1633 12.2966 20.8366 12.1566Z" fill="#787878"/>
                    </svg>
                </a>
            </li>
            
             <li data-toggle="tooltip" data-placement="right" data-original-title="Performance Dashboard">
                <a href="{{url('dashboard/organization/'.$organization->slug.'/performance-dashboard/'.$organization->type)}}" @if (url()->current() == url('dashboard/organization/'.$organization->slug.'/performance-dashboard/'.$organization->type)) class="nav-link active" @else class="nav-link"  @endif>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <path d="M25.6673 25.6665H2.33398C1.85565 25.6665 1.45898 25.2698 1.45898 24.7915C1.45898 24.3132 1.85565 23.9165 2.33398 23.9165H25.6673C26.1457 23.9165 26.5423 24.3132 26.5423 24.7915C26.5423 25.2698 26.1457 25.6665 25.6673 25.6665Z" fill="#787878"/>
                      <path d="M11.375 4.66683V25.6668H16.625V4.66683C16.625 3.3835 16.1 2.3335 14.525 2.3335H13.475C11.9 2.3335 11.375 3.3835 11.375 4.66683Z" fill="#787878"/>
                      <path opacity="0.4" d="M3.5 11.6668V25.6668H8.16667V11.6668C8.16667 10.3835 7.7 9.3335 6.3 9.3335H5.36667C3.96667 9.3335 3.5 10.3835 3.5 11.6668Z" fill="#787878"/>
                      <path opacity="0.4" d="M19.834 17.4998V25.6665H24.5007V17.4998C24.5007 16.2165 24.034 15.1665 22.634 15.1665H21.7007C20.3007 15.1665 19.834 16.2165 19.834 17.4998Z" fill="#787878"/>
                    </svg>
                </a>
            </li>
            
              <li>
                 <a href="{{url('dashboard/organization/'.$organization->slug.'/BU-Report/'.$organization->type)}}" @if (url()->current() == url('dashboard/organization/'.$organization->slug.'/BU-Report')) class="nav-link active" @else   @endif  class="nav-link" data-toggle="tooltip" data-placement="right" data-original-title="Report">
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                      <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                      <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                    </svg>
               </a>
            </li>
         
            
             <li data-toggle="tooltip" data-placement="right" data-original-title="Teams">
                <a href="{{url('dashboard/organization/'.$organization->slug.'/BU-TEAMS')}}" @if (url()->current() == url('dashboard/organization/'.$organization->slug.'/BU-TEAMS')) class="nav-link active" @else class="nav-link"  @endif >
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <path opacity="0.4" d="M10.5007 2.33325C7.44398 2.33325 4.95898 4.81825 4.95898 7.87492C4.95898 10.8733 7.30398 13.2999 10.3607 13.4049C10.454 13.3933 10.5473 13.3933 10.6173 13.4049C10.6407 13.4049 10.6523 13.4049 10.6756 13.4049C10.6873 13.4049 10.6873 13.4049 10.699 13.4049C13.6856 13.2999 16.0306 10.8733 16.0423 7.87492C16.0423 4.81825 13.5573 2.33325 10.5007 2.33325Z" fill="#787878"/>
                      <path d="M16.4271 16.5084C13.1721 14.3384 7.86378 14.3384 4.58544 16.5084C3.10378 17.5 2.28711 18.8417 2.28711 20.2767C2.28711 21.7117 3.10378 23.0417 4.57378 24.0217C6.20711 25.1184 8.35378 25.6667 10.5004 25.6667C12.6471 25.6667 14.7938 25.1184 16.4271 24.0217C17.8971 23.03 18.7138 21.7 18.7138 20.2534C18.7021 18.8184 17.8971 17.4884 16.4271 16.5084Z" fill="#787878"/>
                      <path opacity="0.4" d="M23.3209 8.56337C23.5076 10.8267 21.8976 12.81 19.6693 13.0784C19.6576 13.0784 19.6576 13.0784 19.6459 13.0784H19.6109C19.5409 13.0784 19.4709 13.0784 19.4126 13.1017C18.2809 13.16 17.2426 12.7984 16.4609 12.1334C17.6626 11.06 18.3509 9.45003 18.2109 7.70003C18.1293 6.75503 17.8026 5.8917 17.3126 5.1567C17.7559 4.93504 18.2693 4.79504 18.7943 4.74837C21.0809 4.55004 23.1226 6.25337 23.3209 8.56337Z" fill="#787878"/>
                      <path d="M25.6556 19.3549C25.5623 20.4866 24.8389 21.4666 23.6256 22.1316C22.4589 22.7732 20.9889 23.0766 19.5306 23.0416C20.3706 22.2832 20.8606 21.3382 20.9539 20.3349C21.0706 18.8882 20.3823 17.4999 19.0056 16.3916C18.2239 15.7732 17.3139 15.2832 16.3223 14.9216C18.9006 14.1749 22.1439 14.6766 24.1389 16.2866C25.2123 17.1499 25.7606 18.2349 25.6556 19.3549Z" fill="#787878"/>
                    </svg>
                </a>
            </li>

            <li data-toggle="tooltip" data-placement="right" data-original-title="Impediments Flags">
                <a href="{{url('dashboard/flags/'.$organization->slug.'/impediments')}}" @if (url()->current() == url('dashboard/flags/'.$organization->slug.'/impediments')) class="nav-link active" @else class="nav-link"  @endif >
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <path d="M25.6673 25.6665H2.33398C1.85565 25.6665 1.45898 25.2698 1.45898 24.7915C1.45898 24.3132 1.85565 23.9165 2.33398 23.9165H25.6673C26.1457 23.9165 26.5423 24.3132 26.5423 24.7915C26.5423 25.2698 26.1457 25.6665 25.6673 25.6665Z" fill="#787878"/>
                      <path d="M11.375 4.66683V25.6668H16.625V4.66683C16.625 3.3835 16.1 2.3335 14.525 2.3335H13.475C11.9 2.3335 11.375 3.3835 11.375 4.66683Z" fill="#787878"/>
                      <path opacity="0.4" d="M3.5 11.6668V25.6668H8.16667V11.6668C8.16667 10.3835 7.7 9.3335 6.3 9.3335H5.36667C3.96667 9.3335 3.5 10.3835 3.5 11.6668Z" fill="#787878"/>
                      <path opacity="0.4" d="M19.834 17.4998V25.6665H24.5007V17.4998C24.5007 16.2165 24.034 15.1665 22.634 15.1665H21.7007C20.3007 15.1665 19.834 16.2165 19.834 17.4998Z" fill="#787878"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>