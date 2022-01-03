<x-guest-layout>
    <div style="border-bottom: 1px solid #ddd" class="bg-white">
        <div class="container">
            <div class="py-4 "><a href="{{route('home')}}" class="text-xl text-red-500">Property </a>Propertise</div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="flex justify-between items-center w-full py-8">
                <div>
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
                <div>
                    <span class="px-4 py-4 border-2 border-gray-500">Print</span>
                    <span class="px-4 py-4 border-2 border-gray-500">Save</span>
                    <span class="px-4 py-4 border-2 border-gray-500">Share</span>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="background-color: #f7f5f2">
        <div class="container w-full flex pt-8">
            <div class="w-9/12 pr-6">
                <div class="grid grid-cols-3 -mr-2 text-left flex-wrap">
                    @include('components.property-cart',['latest_property' =>$all_property]);
                </div>
            </div>
            <div class="w-3/12 vartical-search-form">
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
