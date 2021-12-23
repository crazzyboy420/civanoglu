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
                        @if(request('type') == 0)
                           - Land
                        @elseif(request('type')==1)
                          - Apartment
                        @elseif(request('type')==2)
                          - Villa
                        @else
                          Propertise
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
                    @foreach($all_property as $property)
                        <div class="mr-2 bg-white rounded-md mb-6 relative pb-14">
                            <div class="bg-cover rounded-t-md bg-center relative bg-gray-700 w-full h-60" style="background-image: url('{{$property->feature_img}}')">
                                <div class="w-11 h-11 rounded-md top-3 left-3 absolute flex justify-center items-center bg-gray-300"><img src="/img/hart-icon.png" alt=""></div>
                            </div>
                            <div class="p-3">
                                <h3 class="text-xl mb-2 text-gray-700">{{$property->name}}</h3>
                                <span class="uppercase text-2xl text-gray-700 mb-1">{{$property->price}} bdt</span>
                                <div class="w-full">
                                    <span class="inline-block border-2 mb-1 border-gray-100 mr-3 py-1 px-2 rounded-2xl">{{$property->bathrooms}} Bathroms</span>
                                    <span class="inline-block border-2 mb-1 border-gray-100 mr-3 py-1 px-2 rounded-2xl">{{$property->bedrooms}} Bedrooms</span>
                                    <span class="inline-block border-2 mb-1 border-gray-100 mr-3 py-1 px-2 rounded-2xl">15,000 ft <sup>2</sup></span>
                                </div>
                            </div>
                            <a href="{{route('property_single',$property->id)}}" class="inline-block w-11/12 left-3 py-2 bg-gray-700 bottom-3 text-white rounded-xl text-center absolute">More details</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-3/12">

            </div>
        </div>
       <div class="container">
           <div class="text-center">
               {{$all_property->render()}}
           </div>
       </div>
    </div>
</x-guest-layout>
