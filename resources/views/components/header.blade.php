<div class="fixed py-2 w-full top-0 px-12 flex flex-wrap justify-between items-center z-30 sticy-header {{request()->routeIs('home')? '':'genarel-header'}}">
    <a href="{{route('home')}}" class="min-w-max">
        <img src="/img/logo.png" alt="">
    </a>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <div class="min-w-max">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{route('home')}}">Home</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('propertise')}}?type=0">Land</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('propertise')}}?type=2">{{__('Villa')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('propertise')}}?type=1">Apartment</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page','contact-us')}}">Contact Us</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page','about-us')}}">About us</a></li>

        </ul>
    </div>
    <div class="min-w-max text-2xl flex">
        <div class="flex mr-8 items-center">
            <a class="mr-3 mt-1 text-xl text-white" href="{{route('currency','usd')}}">$</a>
            <a style="font-size: 28px" class="text-white font-bold" href="{{route('currency','bdt')}}">৳</a>
        </div>
        <div class="flex">
            <a href="{{LaravelLocalization::getLocalizedUrl('bn')}}">🇧🇩</a>
            <a class="ml-3" href="{{LaravelLocalization::getLocalizedUrl('en')}}">🇺🇸</a>
        </div>
    </div>
</div>
@if(!request()->routeIs('home'))
<div class="mb-20"></div>
@endif
