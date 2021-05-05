<x-admin-layout>
    <div class="container">
        <div class="row m-3">

            <h5 class="blue fw-bold"><i class="bi bi-funnel-fill "></i> Filter:</h5>

            <div class="col-2">
                <a href="{{ URL::route('applications', ['qualified'=>"false"]) }}" class="btn btn-outline-mint">Not Qualfied</a>
            </div>
            <div class="col-1">
                <a href="{{ URL::route('applications', ['qualified'=>"true"]) }}" class="btn btn-outline-mint">Qualfied</a>
            </div>
        </div>
        <div class="row">
            @if($applications === ' ')
            <div class="">
                <h4>There are no applications to Show with that Filter</h4>
            </div>
            @else
            @foreach ($applications as $key => $application)
            <div class="col m-2">
                <div class="card">
                    <div class="card-header appCardTitle">
                        <div class="row d-inline">
                            <h5 class="card-title fw-bold">{{ $application->first_name}} {{ $application->last_name}}
                            </h5>
                            <p class="pink ml-5"> Completed Date: <span class="navy"> {{ $application->completed_date}} </span></p>
                            <p class="pink ml-5"> ACT result: <span class="navy"> {{ $application->application_action}} </span></p>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form method="get" action="{{ route('application.show', $application->id) }}">
                                @csrf
                                <button type="submit" class="mt-4 btn btn-sm fw-bold float-end sponsor-btn">
                                    View Application <i class="bi bi-arrow-right-circle-fill pink fs-6"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>

    </div>
    </div>

</x-admin-layout>
