<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">DRIVE SAFE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                
            @guest
                <li class="nav-item" style="    margin-left: 35rem;">
                    <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/graduate.png') }}" style="max-width: 30px; border-radius: 50%;"></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" >{{ Auth::user()->name }} Profile</a>
                        <a class="dropdown-item" href="#">Profile Setting</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                    </div>
                </li>  
            @endguest
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 input-sm" type="search" placeholder="Search" aria-label="Search">
                {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
            </form>
        </div>
    </div>
</nav>