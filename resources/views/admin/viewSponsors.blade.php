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

    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($sponsors as $sponsor)
            <div class="col mb-3">
                <div class="card h-100">
                    <div class="card-body text-center p-4">
                        <a href="">
                            <img src="{{ asset($sponsor['pic_path']) }}" />
                        </a>

                        <p class="card-text">
                            <center>{{ $sponsor['comments'] }}</center>
                        </p>
                        <form method="get" action="{{ route('manageSponsors', $sponsor->id) }}">
                            @csrf
                            @method('PATCH')
                            <input type="submit" value="{{ $sponsor['sponsor_name'] }}"/>
                        </form>

                       
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
