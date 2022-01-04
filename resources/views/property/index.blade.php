<x-guest-layout>
    <div style="border-bottom: 1px solid #ddd" class="bg-white">
        <div class="container">
            <div class="py-4 mx-2 md:mx-0"><a href="{{route('home')}}" class="text-xl text-red-500">Property </a>Propertise</div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="md:flex justify-between mx-2 md:mx-0 items-center w-full py-8">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-3xl text-gray-500 mb-5">
                        Propertise
                        @if(request('type') == '0')
                           - Land
                        @elseif(request('type')==1)
                          - Apartment
                        @elseif(request('type')==2)
                          - Villa
                        @endif
                    </h2>
                </div>
                <div class="mt-10 md:mt-0">
                    <span class="px-4 py-4 border-2 border-gray-500">Print</span>
                    <span class="px-4 py-4 border-2 border-gray-500">Save</span>
                    <span class="px-4 py-4 border-2 border-gray-500">Share</span>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="background-color: #f7f5f2">
        <div class="container w-full md:flex pt-8">
            <div class="md:w-9/12 md:pr-6 mx-2 md:mx-0">
                <div class="grid md:grid-cols-3 md:-mr-2 w-full text-left">
                    @include('components.property-cart',['latest_property' =>$all_property]);
                </div>
            </div>
            <div class="md:w-3/12 w-full vartical-search-form my-6 md:my-0 px-2 md:px-2">
               @include('components.property-search-form')
            </div>
        </div>
       <div class="container">
           <div class="text-center">
               {{$all_property->render()}}
           </div>
       </div>
    </div>
</x-guest-layout>
