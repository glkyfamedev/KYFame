<x-app-layout>

<div class="container">
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
                            <input type="submit" value="{{ $sponsor['sponsor_name'] }}"/>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</x-app-layout>
