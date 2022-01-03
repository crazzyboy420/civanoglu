@foreach($latest_property as $property)
    <div class="mr-2 bg-white rounded-md mb-6 relative pb-14">
        <div class="bg-cover rounded-t-md bg-center relative bg-gray-700 w-full h-60" style="background-image: url('{{$property->feature_img}}')">
            <div class="w-11 h-11 rounded-md top-3 left-3 absolute flex justify-center items-center bg-gray-300"><img src="/img/hart-icon.png" alt=""></div>
        </div>
        <div class="p-3">
            <h3 class="text-xl mb-2 text-gray-700">{{$property->name}}</h3>
            <span class="uppercase text-2xl text-gray-700 mb-1">{{$property->dynmic_price($property->price)}} bdt</span>
            <div class="w-full">
                <span class="inline-block border-2 mb-1 border-gray-100 mr-3 py-1 px-2 rounded-2xl">{{$property->bathrooms}} Bathroms</span>
                <span class="inline-block border-2 mb-1 border-gray-100 mr-3 py-1 px-2 rounded-2xl">{{$property->bedrooms}} Bedrooms</span>
                <span class="inline-block border-2 mb-1 border-gray-100 mr-3 py-1 px-2 rounded-2xl">15,000 ft <sup>2</sup></span>
            </div>
        </div>
        <a href="{{route('property_single',$property->id)}}" class="inline-block w-11/12 left-3 py-2 bg-gray-700 bottom-3 text-white rounded-xl text-center absolute">More details</a>
    </div>
@endforeach
