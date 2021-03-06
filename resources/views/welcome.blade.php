<x-guest-layout>
    <div class="relative z-10 pt-52 pb-64 bg-cover bg-center"  style="background-image:url(/img/hero-bg.jpg)">
        <div class="absolute w-full h-full top-0 left-0 bg-black opacity-30"></div>
        <div class="container z-20 relative text-white text-center text-2xl">
            <h3 class="md:text-5xl text-2xl font-bold mb-5">Guide Property - your guide<br>to the primary real estate market in dubai</h3>
            <p class="text-sm md:text-xl">The most convenient real estate search portal in dubai,start searching now!</p>
        </div>
    </div>
    <div class="welcome-property-search-form container bg-white py-3 px-4 rounded-md shadow-xl flex relative -top-24 md:-top-8 z-10 flex items-center">
        @include('components.property-search-form',['locations'=>$locations])
    </div>
    <div class="md:py-32 mb-16 md:mb-0 text-center">
        <div class="container">
            <h2 class="md:text-4xl text-2xl mb-5">Choose real estate by points,quickly <br> and efficintly with the help of <span style="text-decoration-thickness: 2px;" class="underline">Smart search</span></h2>
            <p class="md:text-2xl text-xl text-gray-500 mb-10">Answer a questions an get access to a personal selection objects</p>
            <a href="#" class="text-xl rounded-2xl py-3 px-8 inline-block border-2 border-gray-700">Start the review</a>
        </div>
    </div>
    <div class="container text-center">
        <h2 class="md:text-4xl text-2xl mb-10 md:px-64">Why should you choose a Property with the help of our sercives?</h2>
        <div class="w-full md:flex md:mb-10 mb-6">
            <div class="md:w-1/3 md:px-20 px-10 mb-6">
                <h3 class="text-xl font-bold mb-2">Huge selection <br> of real estate</h3>
                <p class="text-gray-500">Choose from the best propertise from the most current developers</p>
            </div>
            <div class="md:w-1/3 md:px-20 px-10 mb-6">
                <h3 class="text-xl font-bold mb-2">Full information <br> about objects and buildings</h3>
                <p class="text-gray-500">Access to main benefits characteristise and feature directly from the objects page</p>
            </div>
            <div class="md:w-1/3 md:px-20 px-10 mb-6">
                <h3 class="text-xl font-bold mb-2">The ability to get an online<br> display of the object</h3>
                <p class="text-gray-500">Book an online display of any of the objects you are intersted in </p>
            </div>
        </div>
        <div class="w-full md:flex">
            <div class="md:w-1/3 md:px-20 px-10 mb-6">
                <h3 class="text-xl font-bold mb-2">Buarantee</h3>
                <p class="text-gray-500">We take the transaction support on ourselves</p>
            </div>
            <div class="md:w-1/3 md:px-20 px-10 mb-6">
                <h3 class="text-xl font-bold mb-2">Assistance in selection<br> of real estate</h3>
                <p class="text-gray-500">Our experts will help you choose exactly what you have been dreaming about for a long time</p>
            </div>
            <div class="md:w-1/3 md:px-20 px-10 mb-6">
                <h3 class="text-xl font-bold mb-2">Related information</h3>
                <p class="text-gray-500">We maintain up-to-date information</p>
            </div>
        </div>
        <div class="w-full">
            <h2 class="md:text-4xl text-3xl px-10 md:px-0 mb-10 mt-10">More information about us</h2>
            <div style="background-image:url(http://i3.ytimg.com/vi/wIubyyV_OAM/hqdefault.jpg)" class="w-full bg-no-repeat bg-center flex justify-center items-center rounded">
                <div class="md:py-20 py-10 text-center">
                    <a class="w-32 h-72" href="https://www.youtube.com/watch?v=wIubyyV_OAM" data-lity><img src="/img/play-btn.png" alt=""></a>
                    <p class="text-2xl text-white -ml-4">Watch the video</p>
                </div>
            </div>
            <p class="mt-10 text-lg px-5">The Vuide Property portal has collected comprehensive information about the <strong>primary real estate market in Dubai.</strong> Here you can find villas, apartments,apartments,residences, and other types of real estate in Dubay.
            We have prepared an <strong>intellinget housing selection system for your needs,you can search for real estate.</strong></p>
        </div>
        <div class="w-full md:flex text-center md:px-28 my-10">
            <div class="min-w-max px-10 md:mb-0 mb-6">
                <span class="bg-gray-800 inline-block rounded-full h-10 w-10 text-2xl leading-10 text-center text-white font-bold">1</span>
                <p class="mt-4">Using <span class="underline">smart search</span></p>
            </div>
            <div class="min-w-max px-10 md:mb-0 mb-6">
                <span class="bg-gray-800 inline-block rounded-full h-10 w-10 text-2xl leading-10 text-center text-white font-bold">2</span>
                <p class="mt-4">By <span class="underline">map</span> and districets <br>of the city</p>
            </div>
            <div class="min-w-max px-10 md:mb-0 mb-6">
                <span class="bg-gray-800 inline-block rounded-full h-10 w-10 text-2xl leading-10 text-center text-white font-bold">3</span>
                <p class="mt-4">Using the advanced <br>filter</p>
            </div>
            <div class="min-w-max px-10 md:mb-0 mb-6">
                <span class="bg-gray-800 inline-block rounded-full h-10 w-10 text-2xl leading-10 text-center text-white font-bold">4</span>
                <p class="mt-4">Selection of orders from our <br>verified,licensed real estate agets</p>
            </div>
        </div>
        <p class="m:px-32 px-4 mt-4 text-lg">You can also search for information about residential complexes and buildings,read useful articles on the forum.We do not impose on you the
             choice of centain developers and agencies,you have the right to choose real estate and speciallist yorself</p>
        <div class="w-full flex justify-center">
            <div style="width: 2px" class="mt-4 bg-gray-400 h-32"></div>
        </div>
        <div class="w-full md:text-left md:flex mt-10">
            <div class="md:w-1/2">
                <p class="md:pr-16 px-4 md:px-0 mb-6 md:mb-0">We also talk about trends in real estate inte Emiretes, we prepare convenient
                and profitable programs for real estate investments,such as: <strong>Joint purchases,purchase for
                        lease with further post-services </strong> and other programs.For each investor,we
                    <strong>Provide a personal manager</strong> who knows how the market is changing and is always ready to answer any of your questions
                    who knows how the market is changing and is always ready to answer any of your questions We also talk about trends in real estate inte Emiretes, we prepare convenient
                    and profitable programs for real estate investments,such as: <strong>Joint purchases,purchase for
                        lease with further post-services </strong> and other programs.For each investor,we
                    <strong>Provide a personal manager</strong> who knows how the market is changing and is always ready</p>
            </div>
            <div class="md:w-1/2">
                <img style="height:270px" class="rounded w-full" src="/img/project-img.jpg" alt="">
            </div>
        </div>
        <div class="w-full md:flex justify-center mt-10">
            <a class="bg-gray-800 py-2 px-5 inline-block mb-4 md:mb-0 text-white rounded-xl mx-10" href="#">Start searching with filters</a>
            <span class="text-2xl block md:inline-block mb-4 md:mb-0">or</span>
            <a class="rounded-xl py-2 px-5 border-2 border-gray-800 inline-block mx-10" href="#">Start searching on map</a>
        </div>
        <div class="w-full">
            <h2 class="md:text-4xl text-3xl mb-10 mt-14">Last added objects</h2>
            <div class="grid md:grid-cols-4 -mr-2 mb-4 md:mb-0 text-left flex-wrap">
                @include('components.property-cart',['latest_property' =>$latest_property])
            </div>
        </div>
    </div>

</x-guest-layout>
