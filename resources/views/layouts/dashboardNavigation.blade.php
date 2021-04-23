   
    <div class="container-fluid p-3" style="background: rgba(255, 255, 255, 0.64);">
        <nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">           
                
                   <a href="{{ URL('/') }}" class="navbar-brand">                   
                    <img class="" src="{{URL::to('assets/logo.png') }}"
                    style="height: 50px;" />
                 </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse p-3" id="navbarNav">
                    <ul class=" navbar-nav float-end">              
                        <li class="nav-item">                            
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>                   
                        </li>
                        @if (Auth::user()->Role == 'Admin')
                            <li class="nav-item"> 
                                <x-nav-link :href="route('applications')" :active="request()->routeIs('applications')">
                                    {{ __('Applications') }}
                                </x-nav-link>
                            </li>
                            <li class="nav-item"> 
                                <x-nav-link :href="route('viewSponsors')" :active="request()->routeIs('viewSponsors')">
                                    {{ __('Sponsors') }}
                                </x-nav-link>
                            </li>
                        @else
                            <li class="nav-item"> 
                                <x-nav-link :href="route('form')" class="" :active="request()->routeIs('form')">
                                    {{ __('Application') }}
                                </x-nav-link>
                            </li>
                        @endif
                    </ul>
                </div>               
                 
                 <div class="btn-group">
                        <button type="button" class="btn btn-pink"> 
                            <div class="flex items-center px-4">
                                <div class="flex-shrink-0">
                                   <i class="bi bi-person-circle"></i>
                                </div>

                                <div class="ml-3">
                                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->first_name }}</div>
                             
                                </div>
                             </div>
                        </button>

                        <button type="button" class="btn btn-pink dropdown-toggle dropdown-toggle-split" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" >                             
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-nav-link  :href="route('logout')" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Log out') }}
                                    </x-nav-link>
                                </form>
                            </li>                           
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                </div>                                               
            </div>           
        </nav>

    
    </div>


          


    

   