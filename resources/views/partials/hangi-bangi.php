
{{-- =========================================================== --}}

{{-- navbar start --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">LU_Alumni</a>    {{-- will add logo here --}}

    {{-- Dropdown togle button start --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    {{-- Dropdown togle button close --}}
    
    {{-- all nav item start --}}
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link {{ Request::is('/') ? "active":""}}" href="#"> <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link {{ Request::is('/') ? "active":""}}" href="/"> Home<span class="sr-only">(current)</span></a>
            </li>
            
            <!-- Modal start -->
            <div class="modal fade" id="postmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <div class="modal-header">
                    <span class="p-r-10"><i class="fas fa-pencil-alt"></i></span>
                
                    <span class="modal-title" id="exampleModalLabel">create post</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  

                    <form class="login100-form validate-form" method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="modal-body">        {{-- modal body start --}}


                            <div class="clearfix _ikh _1hx">
                                <div class="_4bl9 _42n-">
                                    <input type="text" title="post title" class="_3en1 _480e post-title" name="title" placeholder="post title" id="js_r" required></input>
                                    <input type="hidden" autocomplete="off" name="xhpc_message_text">
                                </div>

                                <div class="_4bl9 _42n-">
                                    <textarea title="write your post here..." class="_3en1 _480e" name="body" placeholder="write your post here..." id="js_r" required></textarea>
                                    <input type="hidden" autocomplete="off" name="xhpc_message_text">
                                </div>
                            </div>

                        </div>      {{-- modal body close --}}

                        <div class="modal-footer">

                            <div class="_16ve _35mw">
                                <ul class="_16vg _1oxv">

                                    
                                    <li class="_5xmp">
                                        <div>
                                            <div class="_6a _4mvf _fk5">
                                                <span class="_m _5g_r">
                                                    <a role="button" aria-pressed="false" rel="ignore">
                                                        <div uiconfig="[object Object]" class="_m_1 _1pnt">
                                                            <i class="_4a0a img sp_9xAwokuXslX sx_274864 far fa-image" alt=""></i>
                                                            <div data-tooltip-delay="500" data-tooltip-display="overflow" data-tooltip-content="Photo/Video" data-hover="tooltip" class="_2aha">File</div>
                                                        </div>
                                                        <div class="_3jk">
                                                            <input accept="video/*,  video/x-m4v, video/webm, video/x-ms-wmv, video/x-msvideo, video/3gpp, video/flv, video/x-flv, video/mp4, video/quicktime, video/mpeg, video/ogv, .ts, .mkv, image/*, image/heic, image/heif, .pdf, .doc, .docx" containerclassname="_5g_r" multiple="" name="composer_photo[]" display="inline" role="button" tabindex="0" data-testid="media-sprout" type="file" class="_n _5f0v" id="js_1p1">
                                                        </div>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </li>                                        
                    
                                    <li class="_5xmp">
                                        <div>
                                            <div class="_6a _4mvf _fk5">
                                                <span class="_m _5g_r">
                                                    <a role="button" aria-pressed="false" rel="ignore">
                                                        <div uiconfig="[object Object]" class="_m_1 _1pnt">
                                                            <div data-tooltip-delay="500" data-tooltip-display="overflow" data-tooltip-content="Photo/Video" data-hover="tooltip" class="_2aha">Post</div>
                                                        </div>
                                                        <div class="_3jk">
                                                            <input containerclassname="_5g_r" multiple="" display="inline" role="button" tabindex="0" data-testid="media-sprout" type="submit" class="_n _5f0v" id="js_1p1">
                                                        </div>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>


                            

                    </form>
                    

                  

                </div>
              </div>
            </div>
            {{-- modal close --}}


            {{-- comunity dropdown start --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">About</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Department's</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Clubs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Volentiers</a>
                </div>
            </li>
            {{-- comunity dropdown end --}}

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Career & Networking</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Career Advice</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Study Abroad</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">General Advice</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programs & Events</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ongoing Event</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Upcomming Events</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Succesfull Events</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Stories </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Success Stories</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Career Expert</a>
                </div>
            </li>

        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </li>
        @else

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">your profile</a>
                    <a class="dropdown-item" href="#">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#postmodal">create post</button>
                    </a>
                    <a class="dropdown-item" href="#">help</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
{{-- navbar close --}}