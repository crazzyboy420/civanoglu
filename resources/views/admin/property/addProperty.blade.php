<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Property') }}
            </h2>
            <div class="min-w-max">
                <a href="{{route('dashboard-propertise')}}" class="bg-gray-700 text-white px-6 rounded py-2">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('create-property')}}" method="POST" enctype="multipart/form-data" class="w-full">@csrf
                        <div class="flex -mx-4 mb-6">
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="name">Name:</label>
                                <input class="civanoglu-input" type="text" id="name" name="name" value="{{old('name')}}" required>
                                @error('name')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="name_bn">Name Bn:</label>
                                <input class="civanoglu-input" type="text" id="name_bn" name="name_bn" value="{{old('name_bn')}}" required>
                                @error('name_bn')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex -mx-4 mb-6">
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="feature_img">Feature Image:</label>
                                <input class="border-gray-500 border py-1.5 px-2" type="file" id="feature_img" name="feature_img">
                                @error('feature_img')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror

                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="price">Price:</label>
                                <input class="civanoglu-input" type="text" id="price" name="price" value="{{old('price')}}" required>
                                @error('price')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="location">Location:</label>
                                <select class="civanoglu-input" type="text" id="location" name="location" required>
                                    <option value="">Select Location</option>
                                    @foreach($locations as $location)
                                        <option {{old('location') == $location->id? "selected='selected'":''}} value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                                @error('location')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full mb-6">
                            <label class="civanoglu-label" for="feature_img">Gallery Image:</label>
                            <input class="border-gray-500 w-full border py-1.5 px-2" type="file" multiple id="gallery_img" name="gallery_img[]">
                            @error('feature_img')
                            <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                            @enderror

                        </div>
                        <div class="flex -mx-4 mb-6">
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="sale">Buy or Rent:</label>
                                <select class="civanoglu-input" id="sale" name="sale" required>
                                    <option value="">Select option</option>
                                    <option {{old('sale') == '0'? "selected='selected'":''}} value="0">Rent</option>
                                    <option {{old('sale') == '1'? "selected='selected'":''}} value="1">Buy</option>
                                </select>
                                @error('sale')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="type">Type:</label>
                                <select class="civanoglu-input" id="type" name="type" required>
                                    <option value="">Select Type</option>
                                    <option {{old('type') == '0'? "selected='selected'":''}} value="0">Land</option>
                                    <option {{old('type') == '1'? "selected='selected'":''}} value="1">Apartment</option>
                                    <option {{old('type') == '2'? "selected='selected'":''}} value="2">Villa</option>
                                </select>
                                @error('type')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="bedrooms">Bedrooms:</label>
                                <select class="civanoglu-input" type="text" id="bedrooms" name="bedrooms">
                                    <option value="">Select option</option>
                                    @for($x=0;$x <= 10;$x++)
                                        <option {{old('bedrooms') == $x? "selected='selected'":''}} value="{{$x}}">{{$x}}</option>
                                    @endfor
                                </select>
                                @error('bedrooms')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="drowing_room">Drowing room:</label>
                                <select class="civanoglu-input" id="drowing_room" name="drowing_room">
                                    <option value="">Select option</option>
                                    @for($x=0;$x <= 5;$x++)
                                        <option {{old('drowing_room') == $x? "selected='selected'":''}} value="{{$x}}">{{$x}}</option>
                                    @endfor
                                </select>
                                @error('drowing_room')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex -mx-4 mb-6">
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="gross_sqm">Gross Squre meter</label>
                                <input class="civanoglu-input" value="{{old('gross_sqm')}}" id="gross_sqm" name="gross_sqm" required>
                                @error('gross_sqm')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="net_sqm">Net squre meter</label>
                                <input class="civanoglu-input" value="{{old('net_sqm')}}" id="net_sqm" name="net_sqm" required>
                                 @error('net_sqm')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="bathrooms">bathrooms</label>
                                <select class="civanoglu-input" id="bathrooms" name="bathrooms">
                                    <option value="">Select option</option>
                                    @for($x=0;$x <= 10;$x++)
                                        <option {{old('bathrooms') == $x? "selected='selected'":''}} value="{{$x}}">{{$x}}</option>
                                    @endfor
                                </select>
                                 @error('bathrooms')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="pool">Pool:</label>
                                <select class="civanoglu-input" id="pool" name="pool">
                                    <option value="">Select pool</option>
                                    <option {{old('pool') == '0'? "selected='selected'":''}} value="0">No</option>
                                    <option {{old('pool') == '1'? "selected='selected'":''}} value="1">Private</option>
                                    <option {{old('pool') == '2'? "selected='selected'":''}} value="2">Public</option>
                                    <option {{old('pool') == '3'? "selected='selected'":''}} value="3">Both</option>
                                </select>
                                 @error('pool')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex -mx-4 mb-6">
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="overview">Overview:</label>
                                <textarea name="overview" class="civanoglu-input" id="overview" cols="30" rows="6" required>{{old('overview')}}</textarea>
                                  @error('overview')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="overview_bn">Overview BN:</label>
                                <textarea name="overview_bn" class="civanoglu-input" id="overview_bn" cols="30" rows="6" required>{{old('overview_bn')}}</textarea>
                                  @error('overview_bn')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex -mx-4 mb-6">
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="why_buy">Why Buy:</label>
                                <textarea name="why_buy" class="civanoglu-input" id="why_buy" cols="30" rows="6">{{old('why_buy')}}</textarea>
                                  @error('why_buy')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="why_buy_bn">Why Buy BN:</label>
                                <textarea name="why_buy_bn" class="civanoglu-input" id="why_buy_bn" cols="30" rows="6">{{old('why_buy_bn')}}</textarea>
                                  @error('why_buy_bn')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex -mx-4 mb-6">
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="description">Description:</label>
                                <textarea name="description" class="civanoglu-input" id="description" cols="30" rows="6" required>{{old('description')}}</textarea>
                                  @error('description')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="px-4 flex-1">
                                <label class="civanoglu-label" for="description_bn">Description BN:</label>
                                <textarea name="description_bn" class="civanoglu-input" id="description_bn" cols="30" rows="6" required>{{old('description_bn')}}</textarea>
                                  @error('description_bn')
                                <p class="text-red-700 text-sm pb-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <input type="submit" class="text-white bg-gray-700 py-2 px-6 rounded uppercase" value="Submit" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
