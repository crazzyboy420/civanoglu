<x-guest-layout>
  <div style="border-bottom: 1px solid #ddd" class="bg-white">
      <div class="container">
          <div class="py-4 "><a href="{{route('home')}}" class="text-xl text-red-500">Property </a>{{$property_single->name}}</div>
      </div>
  </div>
    <div class="bg-white">
     <div class="container">
         <div class="flex justify-between items-center w-full py-8">
             <div>
                 <h2 class="text-3xl text-gray-500 mb-5">{{$property_single->name}}</h2>
                 <span class="text-xl text-gray-600">Price: <strong class="text-3xl text-red-700">{{$property_single->price}} BDT</strong></span>
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
                <div class="gallery-slider mt-16">
                    @foreach($property_single->gallery as $gallery)
                    <div style="background-image: url('{{$gallery->name}}')" class="single-gallery-item w-full bg-center bg-center"></div>
                    @endforeach
                </div>
                <div class="thumnail-gallery text-center mt-6">
                    @foreach($property_single->gallery as $thumb_gallery)
                    <div style="background-image: url('{{$thumb_gallery->name}}')" class="single-thumnail-item w-full bg-center bg-center"></div>
                    @endforeach
                </div>
                <div class="custom-border flex bg-white py-10 pl-10 mt-10">
                    <div class="w-1/4 flex items-center">
                        <p class="text-xl">Overview</p>
                    </div>
                    <div class="w-3/4 border-l-2 border-gray-300 pl-2">
                        <p class="text-md">{{$property_single->overview}}</p>
                    </div>
                </div>
                <div class="custom-border flex bg-white py-10 pl-10 mt-10">
                    <div class="w-1/4 flex items-center">
                        <p class="text-xl">Property Feature</p>
                    </div>
                    <div class="w-1/4 border-l-2 border-gray-300 pl-2">
                         <span class="text-gray-400 text-md block">Property Type: <strong class="text-gray-700 text-lg">
                                 @if($property_single->type==0)
                                     Land
                                 @elseif($property_single->type==1)
                                     Apartment
                                     @elseif($property_single->type==2)
                                         Villa
                                     @endif
                             </strong></span>
                         <span class="text-gray-400 text-md block">Bedrooms: <strong class="text-gray-700 text-lg">{{$property_single->bedrooms}}</strong></span>
                    </div>
                    <div class="w-1/4 border-l-2 border-gray-300 pl-2">
                        <span class="text-gray-400 text-md block">Bathrooms: <strong class="text-gray-700 text-lg">{{$property_single->bathrooms}}</strong></span>
                        <span class="text-gray-400 text-md block">Location: <strong class="text-gray-700 text-lg">{{$property_single->location}}</strong></span>
                    </div>
                    <div class="w-1/4 border-l-2 border-gray-300 pl-2">
                        <span class="text-gray-400 text-md block">Land size sqm: <strong class="text-gray-700 text-lg">{{$property_single->gross_sqm}}</strong></span>
                        <span class="text-gray-400 text-md block">Living space sqm: <strong class="text-gray-700 text-lg">{{$property_single->net_sqm}}</strong></span>
                        <span class="text-gray-400 text-md block">Pool: <strong class="text-gray-700 text-lg">
                                 @if($property_single->pool==0)
                                    No
                                @elseif($property_single->pool==1)
                                    Private
                                    @elseif($property_single->pool==2)
                                        Public
                                     @elseif($property_single->pool==3)
                                         Both
                                    @endif
                            </strong></span>
                    </div>
                </div>
                <div class="custom-border flex bg-white py-10 pl-10 mt-10">
                    <div class="w-1/4 flex items-center">
                        <p class="text-xl">Why buy this property</p>
                    </div>
                    <div class="w-3/4 border-l-2 border-gray-300 pl-2">{{$property_single->why_buy}}</div>
                </div>
                <div class="custom-border flex bg-white p-10  mt-10">
                    <div class="roomcard-desc roomcard-desc-lastsection">
                        <h3 class="text-xl mb-4"> FACILITIES &amp; LOCATION</h3>
                        <p>{{$property_single->description}}</p>

                    </div>
                </div>
            </div>
            <div class="w-3/12">
                <p class="p-4 text-center" style="border:1px solid #b93006">Subscribe to Property Turkey media for blogs/news/videos</p>
                <div class="px-4 py-6 mt-4 custom-border" style="background-color:#e6e2d7">
                    <h3 class="text-2xl text-gray-600 pb-6">Enquire about this property</h3>
                <form action="">
                    <label class="block text-xl mb-2" for="name">Name:</label>
                    <input class="w-full border-none mb-4 focus-box-shadow-none py-4" type="text" placeholder="First Name">
                    <label class="block text-xl mb-2" for="name">Phome:</label>
                    <input class="w-full border-none mb-4 focus-box-shadow-none py-4" type="tel" placeholder="Phone">
                    <label class="block text-xl mb-2" for="name">Email:</label>
                    <input class="w-full border-none mb-4 focus-box-shadow-none py-4" type="email" placeholder="E-mail">
                    <label class="block text-xl mb-2" for="name">Massage:</label>
                    <textarea placeholder="Masseage" class="border-none mb-4 w-full h-32 focus-box-shadow-none" name="">I'm interested in this property</textarea>
                    <input class="w-full border-none outline-none py-4 bg-red-700 text-white" type="submit" value="REQUEST DETAILS">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
