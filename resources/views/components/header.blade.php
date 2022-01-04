<div class="fixed py-2 w-full top-0 px-4  md:px-12 flex flex-wrap justify-between items-center z-30 sticy-header {{request()->routeIs('home')? '':'genarel-header'}}">
    <a href="{{route('home')}}" class="min-w-max">
        <img class="w-24 md:min-w-max py-2 md:py-0" src="/img/logo.png" alt="">
    </a>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <div class="min-w-max md:block civanoglu-menu">
        <ul class="md:flex justify-center">
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
            <a class="text-white bdt md:font-bold mt-1 md:mt-0" href="{{route('currency','bdt')}}">৳</a>
        </div>
        <div class="flex">
            <a href="{{LaravelLocalization::getLocalizedUrl('bn')}}">🇧🇩</a>
            <a class="ml-3" href="{{LaravelLocalization::getLocalizedUrl('en')}}">🇺🇸</a>
        </div>
    </div>
    <div class="min-w-max md:hidden">
        <i class="text-white cursor-pointer moblile-menu" data-feather="menu"></i>
    </div>
</div>
@if(!request()->routeIs('home'))
<div class="mb-20"></div>
@endif
