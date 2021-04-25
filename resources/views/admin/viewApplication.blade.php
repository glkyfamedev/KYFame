<x-app-layout>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif

    <div class="container mt-5 justify-content-center">
        <div class="col-6 mx-auto mb-5">

            <div class="card text-center">
                <div class="card-header">
                    <div class="card-title navy">
                        <h3>{{ $applications->first_name .' '. $applications->last_name}}</h3>
                    </div>
                </div>

                <div class="card-body">

                    <div class="card-text p-3">
                        <p>{{ $applications->primaryPhone }}.</p>
                    </div>
                    <div class="card-text p-3">
                        <p>{{ $applications->altPhone }}.</p>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <p>  {{ $applications->email  }}</p>
                    </div>
                    <div class="row justify-content-center">
                        {{-- <p> {{ $email }}</p> --}}
                    </div>

                    <div class="row justify-content-center">
                        <address>
                            <center>
                                {{ $applications->streetAddress }}<br>
                                {{ $applications->city }}<br>
                                {{ $applications->state }}<br>
                                {{ $applications->zip }}&nbsp;
                            </center>
                        </address>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <x-nav-link :href="URL('admin\manageApplications')" :active="request()->routeIs('applications')">
                        {{ __('Back to Applications') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
