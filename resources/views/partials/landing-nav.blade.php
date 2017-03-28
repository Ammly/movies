<div class="header_top">
            <div class="col-sm-3 logo"><a href="{{ url('/') }}">{!! trans('titles.app') !!}</a></div>
            <div class="col-sm-6 nav">
              <ul>
                 <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="comic"><a href="{{ route('movie') }}"> </a></span></li>
                 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="movie"><a href="{{ route('movie') }}"> </a> </span></li>
                 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="video"><a href="{{ route('movie') }}"> </a></span></li>
                 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="game"><a href="{{ route('movie') }}"> </a></span></li>
                 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="tv"><a href="{{ route('movie') }}"> </a></span></li>
                 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="more"><a href="{{ route('movie') }}"> </a></span></li>
             </ul>
            </div>
            <div class="col-sm-3 header_right">
                <ul class="navbar-nav">
                    @role('admin')
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Admin <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>{!! HTML::link(url('/users'), Lang::get('titles.adminUserList')) !!}</li>
                                <li>{!! HTML::link(url('/users/create'), Lang::get('titles.adminNewUser')) !!}</li>
                                <li>{!! HTML::link(url('/themes'), Lang::get('titles.adminThemesList')) !!}</li>
                            </ul>
                        </li>
                    @endrole
                </ul>
               <ul class="header_right_box">

                    {{-- Authentication Links --}}
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">{!! trans('titles.login') !!}</a></li>
                        <li><a href="{{ route('register') }}">{!! trans('titles.register') !!}</a></li>
                    @else
                        <li><img src="images/p1.png" alt=""/></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>{!! HTML::link(url('/profile/'.Auth::user()->name), trans('titles.profile')) !!}</li>
                                <li>{!! HTML::link(url('/home'), trans('titles.home')) !!}</li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {!! trans('titles.logout') !!}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                 <div class="clearfix"> </div>
               </ul>
            </div>
            <div class="clearfix"> </div>
          </div>