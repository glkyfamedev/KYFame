<x-app-layout>

    <x-slot name="header">
        <div class="row">
            <div class="col">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>
            <div class="col">
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">

                                <div class="font-medium text-base text-gray-800">{{ Auth::user()->first_name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </x-slot>

    <form method="get" action="{{ route('updateSponsor', $id) }}">
          <div class="form-group">
              @csrf      
              @method('PATCH')       
              <label for="sponsor_name">Sponsor Name</label>
              <input type="text" class="form-control" name="sponsor_name" value="{{ $sponsor_name }}"/>
          </div>
          <div class="form-group">
              <label for="comments">Comments or Other Text</label>
              <input type="text" class="form-control" name="comments" value="{{ $comments }}"/>
          </div>
          <div class="form-group">
              <label for="pic_url">URL of Sponsor Picture</label>
              <input type="text" class="form-control" name="pic_url" value="{{ $pic_path }}"/>
          </div>
          <div class="form-group">
              <label for="contact_name">Contact Name</label>
              <input type="text" class="form-control" name="contact_name" value="{{ $contact_name }}"/>
          </div>
          <div class="form-group">
              <label for="contact_email">Contact Email</label>
              <input type="text" class="form-control" name="contact_email" value="{{ $contact_email }}"/>
          </div>
          <div class="form-group">
              <label for="contact_street_addr1">Contact Street Address1</label>
              <input type="text" class="form-control" name="contact_street_addr1" value="{{ $contact_street_addr1 }}"/>
          </div>
          <div class="form-group">
              <label for="contact_street_addr2">Contact Street Address2</label>
              <input type="text" class="form-control" name="contact_street_addr2" value="{{ $contact_street_addr2 }}"/>
          </div>
          <div class="form-group">
              <label for="contact_city">Contact City</label>
              <input type="text" class="form-control" name="contact_city" value="{{ $contact_city }}"/>
          </div>
          <div class="form-group">
              <label for="contact_state">Contact State</label>
              <input type="text" class="form-control" name="contact_state" value="{{ $contact_state }}"/>
          </div>
          <div class="form-group">
              <label for="contact_zip">Contact Zip</label>
              <input type="number" class="form-control" name="contact_zip" value="{{ $contact_zip }}"/>
          </div>
          <div class="form-group">
              <label for="contact_phone_num">Phone</label>
              <input type="number" class="form-control" name="contact_phone_num" value="{{ $contact_phone_num }}"/>
          </div>

          <button type="submit" class="btn btn-block btn-danger">Update Sponsor</button>
      </form>


</x-app-layout>
