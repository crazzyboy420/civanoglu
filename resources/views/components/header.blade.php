<div class="fixed py-2 w-full top-0 px-12 flex flex-wrap justify-between items-center z-30 sticy-header {{request()->routeIs('home')? '':'genarel-header'}}">
    <a href="{{route('home')}}" class="min-w-max">
        <img src="/img/logo.png" alt="">
    </a>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <div class="min-w-max">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{route('home')}}">Home</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('propertise')}}?type=0">Land</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('propertise')}}?type=2">Villa</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('propertise')}}?type=1">Apartment</a></li>
            <li><a class="inline-block p-4 text-white" href="#">Smart search</a></li>
            <li><a class="inline-block p-4 text-white" href="#">For developers</a></li>
            <li><a class="inline-block p-4 text-white" href="#">For investors</a></li>
            <li><a class="inline-block p-4 text-white" href="#">For agents</a></li>
            <li><a class="inline-block p-4 text-white" href="#">Partnership</a></li>
        </ul>
    </div>
    <div class="min-w-max text-2xl">
        <a href="#">🇧🇩</a>
        <a href="#">🇺🇸</a>
    </div>
</div>
@if(!request()->routeIs('home'))
<div class="mb-20"></div>
@endif
