<div class="container-fluid p-3" style="background: rgba(255, 255, 255, 0.64);">
    <nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-light border-bottom">
        <div class="container-fluid">
            <x-nav-link :href="route('adminDashboard')" :active="request()->routeIs('adminDashboard')">
                <img class="" alt="" src="{{URL::to('assets/logo.png') }}" style="height: 50px;" />
            </x-nav-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3" id="navbarNav">
                <ul class=" navbar-nav float-end">
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
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-pink">
                    <div class="px-4">
                        <div class="d-inline-flex ">
                            <div class="text-white"><i class="bi bi-person-circle mr-3"></i> {{ Auth::user()->first_name }}</div>
                        </div>
                    </div>
                </button>
                <button type="button" class="btn btn-pink dropdown-toggle dropdown-toggle-split" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav-link :href="route('logout')" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-nav-link>
                        </form>
                    </li>
                    {{-- <li><a class="dropdown-item" href="#">Another action</a></li>--}}
                    {{-- <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                    {{-- <li><hr class="dropdown-divider"></li>--}}
                    {{-- <li><a class="dropdown-item" href="#">Separated link</a></li>--}}
                </ul>
            </div>
        </div>
    </nav>
</div>
