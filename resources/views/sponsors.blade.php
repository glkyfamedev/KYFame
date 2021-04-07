<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sponsors') }}
        </h2>
    </x-slot>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Thank you to all our Sponsors who make KYFAME so successful! Click on their icon to go to their website...
                     <div class="container border-b p-4">
                        <div class="row row-cols-1 row-cols-md-3">
                            @foreach ($sponsors as $sponsor)
                                <div class="col mb-3">
                                    <div class="card h-100">
                                        <div class="card-body text-center p-4">
                                            <a href="">
                                                <img src="{{asset($sponsor['pic_path']) }}" />
                                            </a>
                                            
                                            <p class="card-text">
                                                <center>{{ $sponsor['comments'] }}</center>
                                            </p>                              
                                        

                                            <form method="get" action="{{ route('sponsors.show', $sponsor['id']) }}">
                                                @csrf                                    
                                            <a class="pink font-bold" href="{{ route('sponsors.show', $sponsor['id']) }} ">{{ $sponsor['sponsor_name'] }}<i class="bi bi-chevron-double-right"></i></a>
                                            </form>                                     
                                        </div>
                                    </div>    
                                </div>                            
                            @endforeach                            
                        </div>
                    </div>
                </div>         
            </div>
        </div>      
    </div></x-guest-layout>