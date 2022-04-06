<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="{{ route('admin.dashboard') }}" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>

                   <span> Home</span>
                </div>
            </a>

                {{-- <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                    <li class="active">
                        <a href="#"> Sales </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.analytic') }}"> Analytics </a>
                    </li>
                </ul> --}}
            </li>






            @if (getPostTypes()->isNotEmpty())
             <li class="menu">
             @foreach(getPostTypes() as $sidePostType)

                <a href="#dashboard{{ $sidePostType->slug }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        {!! $sidePostType->icon !!}
                        <span>{{ $sidePostType->title }}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="dashboard{{ $sidePostType->slug }}" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.post',  $sidePostType->slug) }}"> All {{ $sidePostType->title }} </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.post.create',  $sidePostType->slug) }}"> Add New  </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.post.trash',  $sidePostType->slug) }}"> Trash  </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.post.log',  $sidePostType->slug) }}"> Log  </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.post.order',  $sidePostType->slug) }}"> Order  </a>
                    </li>
                </ul>
            @endforeach

            </li>



            <li class="menu">
                <a href="{{ route('admin.contact') }}" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-envelope-open"></i>
                        <span>Contact Message</span>
                    </div>
                </a>
            </li>
            {{-- <li class="menu">
                <a href="{{ route('admin.admissions') }}" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-envelope-open"></i>
                        <span>Admissions</span>
                    </div>
                </a>
            </li>
            --}}
            <li class="menu">
                <a href="{{ route('admin.albums') }}" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-images"></i>
                        <span>Gallery</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{ route('admin.inquiry.index') }}" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-envelope-open"></i>
                        <span>Inquiry</span>
                    </div>
                </a>
            </li>






            <li class="menu">
                <a href="#user{{ $sidePostType->slug }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="user{{ $sidePostType->slug }}" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.user') }}"> All Users </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.user.create') }}"> Add New  </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('admin.user.role') }}"> Role  </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.user.permission') }}"> Permission  </a>
                    </li> --}}
                </ul>
            </li>




            <li class="menu">
                <a href="#cache{{ $sidePostType->slug }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-eye"></i>
                        <span>System Cache</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="cache{{ $sidePostType->slug }}" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.clearview') }}"> Clear View </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.clearconfig') }}"> Clear Config  </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.clearcache') }}"> Clear Cache  </a>
                    </li>
                </ul>
            </li>



            @endif
            <li class="menu">
                <a href="{{ route('admin.site') }}" class="dropdown-toggle">
                    <div class="">
                        <i class="fab fa-internet-explorer"></i>
                        <span>Site Setting</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="#postType" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-blog"></i>
                        <span>Post Type</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="postType" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.post_type') }}"> All Post Types </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.post_type.create') }}"> Add New  </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.post_type.order') }}"> Post Type Position  </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#customField" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fab fa-intercom"></i>
                        <span>Custom Field</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="customField" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.custom_field') }}"> All Custom Field </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.custom_field.create') }}"> Add New  </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.post_type.order') }}"> Post Type Position  </a>
                    </li>
                </ul>
            </li>


        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
<!--  END SIDEBAR  -->
