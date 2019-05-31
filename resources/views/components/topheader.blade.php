<div class="flex">
    {{-- Left Side --}}
    <div class="w-11p relative hidden lg:block">
        <div class="bg-red h-70p bgi-p">

        </div>
        <div class="bg-grey-dark h-30p bgi-s">
            &nbsp;
        </div>
        <div class="absolute pin-t pin-r mt-24 ">
            <h2 class="text-om-white logo-text text-4xl w-20r absolute">O M Meats</h2>
        </div>
    </div>
    {{-- right side --}}
    <div class="flex flex-col flex-1">
        {{-- Top --}}
        <div class="flex bgi-s py-4 pl-4 lg:py-0 lg:pl-0">
            {{-- OM LTD --}}
            <div class="w-auto lg:w-1/3 bg-grey flex flex-col bgi-s text-om-white">
                <h1 class="pb-1 pt-2 text-center">O'Mahony Meats Ltd.</h1>
                <h2 class="py-1 text-center font-light tracking-xwide italic subheading">"Catering for Quality"</h2>
            </div>
            {{-- Main NAV --}}
            <div class="w-auto lg:w-2/3 flex justify-end lg:justify-around items-start pt-6 bgi-s flex-1">
                <a href="{{route('home')}}" class="no-underline uppercase text-om-white hover:text-grey-light hidden lg:block">Home</a>
                <a href="{{route('about')}}" class="no-underline uppercase text-om-white hover:text-grey-light hidden lg:block">About</a>
                <a href="{{route('quality')}}" class="no-underline uppercase text-om-white hover:text-grey-light hidden lg:block">Quality</a>
                <a href="{{route('careers')}}" class="no-underline uppercase text-om-white hover:text-grey-light hidden lg:block">Careers</a>
                <a href="{{route('contact')}}" class="no-underline uppercase text-om-white hover:text-grey-light hidden lg:block">Contact</a>
                <button class="lg:hidden" id="NavBtn"><i class="fas fa-bars text-grey-lightest text-3xl pr-10 self-center"></i></button>
            </div>
        </div>
        <div class="hidden lg:flex justify-between pt-2 pr-2 bgi-s">
            <div class="">
                &nbsp;
            </div>
            <div class="flex justify-between w-75p pr-4">
                <a href="{{route('wholesale')}}" class="bgi-p w-32 pb-6 pt-3 text-center text-om-white rounded-t-lg no-underline nav-link ">Wholesale</a>
                <a href="{{route('retail')}}" class="bgi-p w-32 pb-6 pt-3 text-center text-om-white rounded-t-lg no-underline nav-link ">Retail</a>
                <a href="{{route('products')}}" class="bgi-p w-32 pb-6 pt-3 text-center text-om-white rounded-t-lg no-underline nav-link ">Products</a>
                <a href="{{route('offers')}}" class="bgi-p w-32 pb-6 pt-3 text-center text-om-white rounded-t-lg no-underline nav-link ">Offers</a>
                <a href="{{route('recipes')}}" class="bgi-p w-32 pb-6 pt-3 text-center text-om-white rounded-t-lg no-underline nav-link ">Recipes</a>
                <a href="{{route('news')}}" class="bgi-p w-32 pb-6 pt-3 text-center text-om-white rounded-t-lg no-underline nav-link ">News</a>
            </div>
        </div>
        <div class="hidden flex-col px-8 bgi-p" id="MobNav">
            <div class="w-full px-2 py-2">
                <div class="flex justify-around py-2">
                    <a href="{{route('home')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2 ">Home</a>
                    <a href="{{route('about')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">About</a>
                    <a href="{{route('quality')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">Quality</a>
                    <a href="{{route('careers')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">Careers</a>
                    <a href="{{route('contact')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">Contact</a>
                </div>
            </div>
            <div class="w-full px-2 py-2">
                <div class="flex justify-around py-2">
                    <a href="{{route('wholesale')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">Wholesale</a>
                    <a href="{{route('retail')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">Retail</a>
                    <a href="{{route('products')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">Products</a>
                    <a href="{{route('offers')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">Offers</a>
                    <a href="{{route('recipes')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">Recipes</a>
                    <a href="{{route('news')}}" class="no-underline border-b border-transparent hover:border-grey-lightest uppercase text-om-white hover:text-grey-light py-2">News</a>
                </div>
            </div>
        </div>
        <div class="bgi-gw overflow-hidden flex justify-center px-4 py-4 z-10 h-20r">
            <div class="slide flex items-center">
                <div class="w-full sm:w-1/2 md:w-1/3 h-18r flex justify-center items-center px-4 py-2">
                   <img src="/images/slider/1.png" alt="" class=" h-full w-full object-cover">
               </div>
               <div class="hidden sm:w-1/2 md:w-1/3 h-18r sm:flex justify-center items-center px-4 py-2">
                   <img src="/images/slider/2.png" alt="" class="h-full w-full object-cover">
               </div>
               <div class="hidden md:w-1/3 h-18r md:flex justify-center items-center px-4 py-2">
                   <img src="/images/slider/3.png" alt="" class="h-full w-full object-cover">
               </div>
           </div>
            <div class="slide flex">
                <div class="w-full sm:w-1/2 md:w-1/3 h-18r flex justify-center items-center px-4 py-2 h-90p">
                   <img src="/images/slider/4.png" alt="" class="w-full h-full object-cover">
               </div>
               <div class="hidden sm:w-1/2 md:w-1/3 h-18r sm:flex justify-center items-center px-4 py-2">
                   <img src="/images/slider/5.png" alt="" class="w-full h-full object-cover">
               </div>
               <div class="hidden md:w-1/3 h-18r md:flex justify-center items-center px-4 py-2">
                   <img src="/images/slider/6.png" alt="" class="w-full h-full object-cover">
               </div>
           </div>
            <div class="slide flex">
                <div class="w-full sm:w-1/2 md:w-1/3 h-18r flex justify-center items-center px-4 py-2 h-90p">
                   <img src="/images/slider/7.png" alt="" class="w-full h-full object-cover">
               </div>
               <div class="hidden sm:w-1/2 md:w-1/3 h-18r sm:flex justify-center items-center px-4 py-2">
                   <img src="/images/slider/8.jpg" alt="" class="w-full h-full object-cover">
               </div>
               <div class="hidden md:w-1/3 h-18r md:flex justify-center items-center px-4 py-2">
                   <img src="/images/slider/9.jpg" alt="" class="w-full h-full object-cover">
               </div>
           </div>
        </div>
    </div>
</div>







