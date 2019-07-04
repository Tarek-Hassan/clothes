<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <!-- BEGIN: Left Aside -->
    <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
        <i class="la la-close"></i>
    </button>
    <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
        <!-- BEGIN: Aside Menu -->
        <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
            data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">

                <li class="m-menu__section">
                    <h4 class="m-menu__section-text">
                        {{__('general.dashbord')}}
                    </h4>
                    <i class="m-menu__section-icon flaticon-more-v3"></i>
                </li>


                @if(auth()->user()->role=='admin')
                @endif

                {{--@ tarek 4/9/2019 Start:ManageUser MOdule--}}
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
                    <a href="{{route('manageusers.index')}}" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">
                        ManageUser
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>
                </li>
                {{--@ tarek 4/9/2019 End:ManageUser MOdule--}}

                {{--@ tarek 4/9/2019 Start:Category-details MOdule--}}
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
                    <a href="" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">
                          CategoryDetails
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{route('categorydetails.index')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">
                                    UploadCategoryDetails
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{route('myfavorite')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">
                                        MyFavourates
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{--@ tarek 4/9/2019 End:Category-details MOdule--}}

                {{--@ tarek 4/9/2019 Start:Category MOdule--}}
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
                    <a href="{{route('category.index')}}" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">
                            Categories
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>
                </li>
                {{--@ tarek 4/9/2019 End:Category MOdule--}}

                {{--@ tarek 4/9/2019 Start:Category-Type MOdule--}}
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
                    <a href="{{route('type.index')}}" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">
                            Gender
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>
                </li>
                {{--@ tarek 4/9/2019 End:Category-Type MOdule--}}

                {{--@ tarek 4/8/2019 Start:Countries_Cities MOdule--}}
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
                    <a class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">
                            Countries_Cities
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{route('country.index')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">
                                        Countries
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{route('city.index')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">
                                        Cities
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                {{--@ tarek 6/8/2019 End:Countries_Cities MOdule--}}

                {{--@ tarek 6/8/2019 Start:Setting MOdule--}}
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
                    <a class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">
                            Setting
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{route('aboutus.edit',[1])}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">
                                        AboutUs
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{--route('privacy.index')--}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">
                                        Privacy
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{--route('advrtisment.index')--}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">
                                        advrtisment
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                {{--@ tarek 6/8/2019 Start:Setting MOdule--}}

                {{--@ tarek 6/8/2019 Start:LOGOUT MOdule--}}
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
                    <a class="m-menu__link m-menu__toggle" href="{{ route('logout') }}" onclick="event.preventDefault();
				            document.getElementById('logout-form').submit();">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">
                            Logout
                        </span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                {{--@ tarek 6/8/2019 End:LOGOUT MOdule--}}

            </ul>
        </div>
