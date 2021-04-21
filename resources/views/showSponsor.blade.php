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


  <div class="container mt-5 justify-content-center">
      <div class="col-6 mx-auto">
  
        <div class="card text-center">
            <div class="card-header">                       
                <img class="d-inline-flex h-28 w-auto sm:h-35" src="{{asset($pic_path) }}" />              
            </div>
            
            <div class="card-body">
              <div class="card-title navy">
                <h3>{{ $sponsor_name}}</h3>
              
              </div>
        
              <div class="card-text p-3">
                <p>{{ $comments }}.</p>
              </div>
              <hr>
                <div class="row justify-content-center">
                            {{ $contact_name }}
                          </div>
                          <div class="row justify-content-center">
                            <a href="mailto: {{ $contact_email }}">{{ $contact_email }}</a>
                </div>
                  
                <div class="row justify-content-center">
                            <address>
                              <center>
                                {{ $contact_street_addr1 }}<br>
                                {{ $contact_street_addr2 }}<br>
                                {{ $contact_city }}<br>
                                {{ $contact_state }}&nbsp;{{ $contact_zip }}
                              </center>
                            </address>
                </div>
            </div>
            <div class="card-footer text-muted">
              <x-nav-link :href="URL('sponsors')" :active="request()->routeIs('sponsors')">
                    {{ __('Back to Sponsors') }}
                  </x-nav-link>
            </div>
          </div>
      </div>
  </div>
  </div>


      
   

</x-guest-layout>
