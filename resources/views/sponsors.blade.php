<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sponsors') }}
        </h2>
    </x-slot>

    <div class="container m-auto">
        <div class="container sponsor-header-row">
            <div class="col-md-8 m-auto p-5">
                <h1 class="text-center font-weight-bold text-white">Meet our Sponsors</h1>
                <hr class="text-white">
                <p class="text-white text-center">Thank you to our Sponsors who make KYFAME so successful!
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($sponsors as $sponsor)
        <div class="col-md-3">
            <div class="sponsor-card rounded-top rounded-2 card mb-4 text-white">


                <div class="sponsor-card-header card-header bg-white p-4">

                    <a href=" #">
                        <img class="m-auto img-fluid card-img-top" src="{{asset($sponsor['pic_path']) }}" />
                    </a>
                </div>
                <div class="sponsor-card-body card-body bg-navy">
                    {{-- <h5 class="card-title">Card title</h5>  --}
                            <p class="">
                                {{-- <center>{{ $sponsor['comments'] }}</center> --}}
                    </p>

                    <form method="get" action="{{ route('sponsors.show', $sponsor['id']) }}">
                        @csrf
                        <a class="text-white font-bold showSponsor-btn" href="{{ route('sponsors.show', $sponsor['id']) }} ">{{ $sponsor['sponsor_name'] }}<i class="bi bi-chevron-double-right"></i></a>
                    </form>
                </div>


            </div>
        </div>
        @endforeach
    </div>
    </div>
</x-guest-layout>
