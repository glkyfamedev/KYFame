<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show') }}
        </h2>
    </x-slot>

    {{-- <style>
    .container {
      max-width: 950px;
    }
    .push-top {
      margin-top: 50px;
    }
    </style> --}}

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif


    <div class="container mt-5 m-auto">
        <div class="row">
            <div class="col-md-6 m-auto text-center p-3 border-bottom ">
                <img class="img-fluid" src="{{asset($pic_path) }}" />
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 mx-auto">
                    <div class=" navy text-center">
                        <div class="card-body text-center" id="headerText">
                            <h4> {{ $headerText}}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-auto" id="body-container">
                <div class="col-lg-5 p-4" id="specialContent">
                    <img class="img-fluid card-img-top" src="{{asset($specialContent) }}" />
                </div>

                <div class="col-lg-6 p-4 my-lg-auto" id="bodyText">
                    <div class="row">
                        <h5>{{ $missionText }}.</h5>
                    </div>
                    <h5>{{ $bodyText }}.</h5>
                    <div class="row">
                        <div class="col-6">
                            <x-nav-link :href="URL('sponsors')" class="mx-auto" :active="request()->routeIs('sponsors')">
                                {{ __('Back to Sponsors') }}
                            </x-nav-link>
                        </div>
                        <div class="col-6">
                            <a href="{{$webSiteUrl}}" class="nav-link pink">Visit Website</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>








</x-guest-layout>
