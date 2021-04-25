<x-app-layout>

<div class="container">

    <div class="row ">
        @foreach ($applications as $key => $application)
            <div class="col m-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $application->first_name}} {{ $application->last_name}} </h5>
                    </div>
                    <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $application->application_action}}</li>
                        <li class="list-group-item">{{ $application->transcript_method}}</li>
                    </ul>
                    </div>
                    <div class="card-body">
                        <form method="get" action="{{ route('application.show', $application->id) }}">
                            @csrf
                            <input type="submit" class="btn btn-pink btn-sm" value="View Application"/>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>



</div>

</x-app-layout>
