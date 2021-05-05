<header class="" id="header-background">
    <div class=" container-fluid" style="background: rgba(255, 255, 255, 0.64);">
        <nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a href="{{ URL('/') }}" class="navbar-brand">
                    <img class="h-8 w-auto sm:h-10" src="{{URL::to('assets/logo.png') }}" style="height: 50px;" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse p-3" id="navbarNav">
                    <ul class=" navbar-nav mx-auto">

                        <li class="nav-item">
                            <x-nav-link :href="URL('students')" class="nav-link fw-bold pink-hover text-dark fs-4" :active="request()->routeIs('students')">
                                {{ __('Students') }}
                            </x-nav-link>
                        </li>

                        <li class="nav-item">
                            <x-nav-link :href="URL('sponsors')" class="nav-link fw-bold pink-hover text-dark fs-4" :active="request()->routeIs('sponsors')">
                                {{ __('Sponsors') }}
                            </x-nav-link>
                        </li>

                        <li class="nav-item">
                            <x-nav-link :href="URL('employers')" class="nav-link fw-bold pink-hover text-dark fs-4" :active="request()->routeIs('employers')">
                                {{ __('Employers') }}
                            </x-nav-link>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-5">
                        <li class="nav-item">
                            <x-nav-link :href="route('signIn')" class="nav-link text-pink fw-bold" :active="request()->routeIs('signIn')">

                                {{ __('Sign In') }}
                            </x-nav-link>
                        </li>

                        <li class="nav-item">
                            <x-nav-link :href="route('register')" class="btn btn-navy fw-bold">
                                {{ __('Sign Up') }}
                            </x-nav-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
