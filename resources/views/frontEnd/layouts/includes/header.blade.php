  {{-- navbar starts --}}
               <!-- Navbar Starts -->
               <nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark bg-opacity-25 py-4">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
                      @foreach ($menus as $menu)
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{$menu['pageRoutes']}}">{{$menu['pageName']}}</a>
                        </li>
                      @endforeach    
                    </ul>
                    <!-- <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block mt-2">
                            @auth
                                {{-- <a href="{{ url('/profile') }}" class="text-light mr-2">{{ Auth::user()->name }}</a> --}}
                                  
                                <div class="text-center text-light">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                    
                                        <a href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                    </a>
                                    </form>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="text-light">Log in</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-light">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif 
                    
                  </div>
                </div>
              </nav>
            <!-- Navbar Ends -->
                {{-- navbar ends --}}
        