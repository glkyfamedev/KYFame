<x-admin-layout>
    <div class="container m-auto bg-light-grey">
        <div class="container sponsor-header-row">
            <div class="row">
                <div class="col-md-9 p-5">
                    <h3 class="text-center my-auto font-weight-bold text-navy">Select a Sponsor or add a new one. </h3>
                    <hr class="text-blue">

                </div>
                <div class="col-3 float-end">
                    <x-nav-link :href="route('addSponsor')" class="float-end mt-5 btn btn-mint text-white" :active="request()->routeIs('addSponsorPage')">
                        <i class="bi bi-plus-circle-fill fs-5 mr-2 text-white"></i> {{ __( 'Add New') }}
                    </x-nav-link>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                @foreach ($sponsors as $sponsor)
                <div class="col-md-3">
                    <div class="sponsor-card p-2 rounded-2 card m-2 text-white">
                        {{-- <form method="post" action="{{ route('deleteSponsor', $sponsor->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-sm fw-bold float-end sponsor-btn">
                            <span class="mr-2"> Delete</span> <i class="ml-2 bi bi-x-octagon-fill text-danger"></i>
                        </button>
                        </form> --}}
                        <img class="img-fluid card-img-top" src="{{asset($sponsor['pic_path']) }}" />
                        <div class="sponsor-card-body grey-gradient mt-auto ">
                            <form method="get" action="{{ route('manageSponsors', $sponsor->id) }}">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="mt-4 btn btn-sm fw-bold float-end sponsor-btn">
                                    {{ $sponsor['sponsor_name'] }} <i class="bi bi-arrow-right-circle-fill pink fs-6"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>















</x-admin-layout>










{{-- <div class="container">
        <div class="row mx-auto">
            @foreach ($sponsors as $sponsor)
            <div class="col-3 m-3">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset($sponsor['pic_path']) }}" />
</div>
<div class="card-body">
    <p class="card-text">
        {{ $sponsor['comments'] }}
    </p>
</div>
<div class="card-body">
    <form method="get" action="{{ route('manageSponsors', $sponsor->id) }}">
        @csrf
        @method('PATCH')
        <input type="submit" value="{{ $sponsor['sponsor_name'] }}" />
    </form>

</div>
</div>
</div>
@endforeach
</div>
</div> --}}
