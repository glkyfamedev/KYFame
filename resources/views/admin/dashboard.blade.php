<x-admin-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container p-4">

                        <div class="row p-4">
                            <h3 class="pink">Welcome {{ Auth::user()->first_name }}</h3>
                        </div>

                        <div class="row justify-content-center">
                            {{-- Applications  --}}
                            <div class="col-lg-4 dashboardCol" id="applicationsDiv">

                                <div class="card p-3" style="height: 300px; border-radius:20px;">
                                    <div class="">
                                        <div class="card-title">
                                            <h4 class="fw-bold" style="text-align:center;">
                                                View Applications
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="m-auto">
                                        <i class=" bi bi-person-lines-fill card-icon"" style=" font-size: 3em; margin-top:-20px;"></i>
                                    </div>
                                    <div style="width:100%; text-align:center; margin-bottom:20px;">

                                        <x-nav-link :href="URL('admin\manageApplications')" class="card-link " :active="request()->routeIs('applications')">
                                            {{ __('Applications') }} <i class="bi bi-arrow-right-circle-fill mint fs-6"></i>
                                        </x-nav-link>
                                    </div>
                                </div>
                            </div>

                            {{-- Sponsors  --}}
                            <div class="col-lg-4 dashboardCol" id="SponsorsDiv">
                                <div class="card p-3" style="height: 300px; border-radius:20px;">
                                    <div class="">
                                        <div class="card-title">
                                            <h4 class="fw-bold" style="text-align:center;">
                                                Manage Sponsors
                                            </h4>
                                        </div>
                                    </div>
                                    <p class="m-auto card-icon">
                                        <i class="bi bi-briefcase-fill mint" style="font-size: 3em; margin-top:-20px;"></i>
                                    </p>
                                    <div style=" width:100%; text-align:center; margin-bottom:20px;">
                                        <x-nav-link :href="route('viewSponsors')" class="card-link " :active="request()->routeIs('viewSponsors')">
                                            {{ __('Manage Sponsors') }} <i class="bi bi-arrow-right-circle-fill mint fs-6"></i>
                                        </x-nav-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-admin-layout>
