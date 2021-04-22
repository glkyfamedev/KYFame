<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="col-5">
                    <div class="row mt-4">
                        <div class="col yellow text-center">
                            <h5> Along with core subjects the program also includes:   </h5>                 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center navy d-inline-flex">
                            <ul class="">       
                                <li class="list-group-item"><i class="bi bi-cone-striped yellow"></i> Safety</li>
                                <li class="list-group-item"><i class="bi bi-cone-striped yellow"></i> Visual workplace organization</li>
                                <li class="list-group-item"><i class="bi bi-cone-striped yellow"></i> Lean Manufacturing</li>
                                <li class="list-group-item"><i class="bi bi-cone-striped yellow"></i> Problem Solving</li>
                            </ul>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>