<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sponsors') }}
        </h2>
    </x-slot>

    <div class="container m-auto bg-light-grey">
        <div class="container sponsor-header-row">
            <div class="col-md-8 m-auto p-5">
                <h1 class="text-center font-weight-bold text-navy">Meet our Sponsors</h1>
                <hr class="text-blue">
                <p class="navy text-center">Thank you to our Sponsors who make KYFAME so successful!
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($sponsors as $sponsor)
                <div class="col-md-3">
                    <div class="sponsor-card p-3 rounded-2 card m-2 text-white">
                        {{-- <div class="sponsor-card-header card-header bg-white">  --}}
                        <img class="img-fluid card-img-top" src="{{asset($sponsor['pic_path']) }}" />
                        {{-- </div>  --}}
                        <div class="sponsor-card-body grey-gradient mt-auto ">
                            {{-- <h5 class="card-title">Card title</h5>  --}
                            <p class="">
                                {{-- <center>{{ $sponsor['comments'] }}</center> --}}
                            </p>

                            <form method="get" action="{{ route('sponsors.show', $sponsor['id']) }}">
                                @csrf
                                <a class="text-white p-3 font-bold showSponsor-btn" href="{{ route('sponsors.show', $sponsor['id']) }} ">{{ $sponsor['sponsor_name'] }}<i class="bi bi-chevron-double-right"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
