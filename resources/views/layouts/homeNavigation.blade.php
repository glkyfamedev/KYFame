<section
    style="background-image: url('assets/home-nav-bg.png'); background-repeat: no-repeat; background-size: cover;height: 530px;">
    <div class="container-fluid" style="background: rgba(255, 255, 255, 0.5);">
        <nav x-data="{ open: false }" class="">
            <div class="relative">
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                        <div class="flex justify-start lg:w-0 lg:flex-1">
                            <a href="{{ URL('/') }}">
                                <span class="sr-only">KYFAME</span>
                                <img class="h-8 w-auto sm:h-10" src="{{URL::to('assets/logo.png') }}"
                                    style="height: 50px;" />
                            </a>
                        </div>


                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <nav class="hidden md:flex space-x-10">
                            <div class="relative">
                                <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <x-nav-link :href="URL('students')" :active="request()->routeIs('students')">
                                    {{ __('Students') }}
                                </x-nav-link>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <x-nav-link :href="URL('sponsors')" :active="request()->routeIs('sponsors')">
                                    {{ __('Sponsors') }}
                                </x-nav-link>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <x-nav-link :href="URL('employers')" :active="request()->routeIs('employers')">
                                    {{ __('Employers') }}
                                </x-nav-link>
                            </div>
                            <div class="relative">
                            </div>
                        </nav>
                        <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Sign In') }}
                            </x-nav-link>
                            <x-nav-link :href="route('register')"
                                class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2  border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-navy hover:bg-mint hover:text-white">
                                {{ __('Sign Up') }}
                            </x-nav-link>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on mobile menu state.-->

                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link :href="URL('students')" :active="request()->routeIs('students')">
                            {{ __('Students') }}
                            </x-nav-link>
                    </div>
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link :href="URL('sponsors')" :active="request()->routeIs('sponsors')">
                            {{ __('Sponsors') }}
                            </x-nav-link>
                    </div>
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link :href="URL('employers')" :active="request()->routeIs('employers')">
                            {{ __('Employers') }}
                            </x-nav-link>
                    </div>
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            <div class="flex-shrink-0">
                                <x-responsive-nav-link :href="URL('dashboard')"
                                    :active="request()->routeIs('dashboard')">
                                    {{ __('Sign In') }}
                                    </x-nav-link>
                            </div>
                            <div class="flex-shrink-0">
                                <x-responsive-nav-link :href="route('dashboard')"
                                    class=" btn ml-8 whitespace-nowrap inline-flex items-center justify-center  border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-navy hover:bg-mint">
                                    {{ __('Sign Up') }}
                                    </x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>
</section>