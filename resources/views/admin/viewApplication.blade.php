<x-app-layout>

    <x-slot name="header">
        <div class="row">
            <div class="col">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>
            <div class="col">
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">

                                <div class="font-medium text-base text-gray-800">{{ Auth::user()->first_name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </x-slot>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif


  <div class="container mt-5 justify-content-center">
      <div class="col-6 mx-auto">
  
        <div class="card text-center">
            <div class="card-header">                       
                {{-- <img class="d-inline-flex h-28 w-auto sm:h-35" src="{{asset($pic_path) }}" />               --}}
            </div>
            
            <div class="card-body">
              <div class="card-title navy">
                <h3>{{ $applications->first_name .' '. $applications->last_name}}</h3>
              
              </div>
        
              <div class="card-text p-3">
                <p>{{ $applications->primaryPhone }}.</p>
              </div>
              <div class="card-text p-3">
                <p>{{ $applications->altPhone }}.</p>
              </div>
              <hr>
                <div class="row justify-content-center">
                        <p>  {{ $applications->email  }}</p> 
                          </div>
                          <div class="row justify-content-center">
                           {{-- <p> {{ $email }}</p> --}}
                </div>
                  
                <div class="row justify-content-center">
                            <address>
                              <center>
                               {{ $applications->streetAddress }}<br>
                               {{ $applications->city }}<br>
                               {{ $applications->state }}<br>
                               {{ $applications->zip }}&nbsp;
                              </center>
                            </address> 
                </div>
            </div>
            <div class="card-footer text-muted">
              <x-nav-link :href="URL('admin\manageApplications')" :active="request()->routeIs('applications')">
                    {{ __('Back to Applications') }}
                  </x-nav-link>
            </div>
          </div>
      </div>
  </div>
  </div>

</x-app-layout>