
<form action="{{route('propertise')}}" method="GET" class="md:flex items-center w-full">
    <div class="md:w-8/12 md:flex justify-between items-center md:mr-2">
        <div class="md:flex flex-col">
            <label for="location">Locations</label>
            <select id="location" name="location" class="md:border-none outline-none w-full md:min-w-max focus-box-shadow-non focus:ring-0 mb-3 md:mb-0" style="border-color: #a0aec0 !important;">
                <option class="pr-4" value="">Locations</option>
                @foreach($locations as $location)
                <option {{request('location')== $location->id ? 'selected=selected':''}} value="{{$location->id}}">{{$location->name}}</option>
                @endforeach
            </select>
        </div>
        <span class="w-0.5 hidden md:block bg-gray-400 h-5"></span>
        <div class="flex-col">
            <label for="sale">Buy or Rent</label>
            <select id="sale" name="sale" class="md:border-none outline-none w-full md:min-w-max focus-box-shadow-none border-gray-400 mb-3 md:mb-0" style="border-color: #a0aec0 !important;">
                <option class="pr-4" value="">Buy or Rent</option>
                <option {{request('sale')=='0' ? 'selected=selected':''}} value="0">Rent</option>
                <option {{request('sale')=='1' ? 'selected=selected':''}} value="1">Buy</option>
            </select>
        </div>
        <span class="w-0.5 hidden md:block bg-gray-400 h-5"></span>
        <div class="flex flex-col">
            <label for="type">Type</label>
            <select id="type" name="type" class="md:border-none outline-none w-full md:min-w-max focus-box-shadow-none border-gray-400 mb-3 md:mb-0" style="border-color: #a0aec0 !important;">
                <option class="pr-4" value="">Type</option>
                <option {{request('type')=='0' ? 'selected=selected':''}} value="0">Land</option>
                <option {{request('type')=='1' ? 'selected=selected':''}} value="1">Apartment</option>
                <option {{request('type')=='2' ? 'selected=selected':''}} value="2">Villa</option>
            </select>
        </div>
        <span class="w-0.5 hidden md:block bg-gray-400 h-5"></span>
        <div class="flex-col flex">
            <label for="price">Price</label>
            <select id="price" name="price" class="md:border-none w-full md:min-w-max outline-none focus-box-shadow-none border-gray-400 mb-3 md:mb-0" style="border-color: #a0aec0 !important;">
                <option class="pr-4" value="">Price</option>
                <option {{request('price')=='3000000' ? 'selected=selected':''}} value="3000000">0-3000000</option>
                <option {{request('price')=='4000000' ? 'selected=selected':''}} value="4000000">3000000-4000000</option>
                <option {{request('price')=='5000000' ? 'selected=selected':''}} value="5000000">4000000-5000000</option>
                <option {{request('price')=='6000000' ? 'selected=selected':''}} value="6000000">5000000-6000000</option>
                <option {{request('price')=='7000000' ? 'selected=selected':''}} value="7000000">6000000-7000000</option>
                <option {{request('price')=='8000000' ? 'selected=selected':''}} value="8000000">7000000-8000000</option>
                <option {{request('price')=='9000000' ? 'selected=selected':''}} value="9000000">8000000-9000000</option>
                <option {{request('price')=='9000000+' ? 'selected=selected':''}} value="9000000+">9000000+</option>
            </select>
        </div>
        <span class="w-0.5 bg-gray-400 hidden md:block h-6"></span>
        <div class="flex flex-col">
            <label for="bedrooms">Bedrooms</label>
            <select id="bedrooms" name="bedrooms" class="md:border-none w-full md:min-w-max outline-none focus-box-shadow-none border-gray-400 mb-3 md:mb-0" style="border-color: #a0aec0 !important;">
                <option class="pr-4" value="">Bedrooms</option>
                <option {{request('bedrooms')=='1' ? 'selected=selected':''}} value="1">1</option>
                <option {{request('bedrooms')=='2' ? 'selected=selected':''}} value="2">2</option>
                <option {{request('bedrooms')=='3' ? 'selected=selected':''}} value="3">3</option>
                <option {{request('bedrooms')=='4' ? 'selected=selected':''}} value="4">4</option>
                <option {{request('bedrooms')=='5' ? 'selected=selected':''}} value="5">5</option>
                <option {{request('bedrooms')=='6' ? 'selected=selected':''}} value="6">6</option>
                <option {{request('bedrooms')=='7' ? 'selected=selected':''}} value="7">7</option>
                <option {{request('bedrooms')=='8' ? 'selected=selected':''}} value="8">8</option>
                <option {{request('bedrooms')=='9' ? 'selected=selected':''}} value="9">9</option>
                <option {{request('bedrooms')=='10' ? 'selected=selected':''}} value="10">10</option>
            </select>
        </div>
    </div>
    <div class="md:w-4/12 flex">
        <input type="search" value="{{request('name_search')}}" name="name_search" placeholder="try to search for something" class="inline-block focus:ring-0 w-8/12 rounded-xl focus:outline-none border-gray-800">
        <input type="submit" value="Search" class="bg-gray-700 text-white py-2.5 ml-2 px-8 rounded-xl cursor-pointer">
    </div>
</form>
