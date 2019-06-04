@extends('master')

@section('title')
 Products | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-10 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            Products
        </h1>  
    </div>
</div>

<div class="bgi-g1">
    <div class="container mx-auto flex flex-col items-center justify-center py-12 w-90p">
        <p class="text-3xl text-p py-6 text-center">
            Here at O'Mahony Meats we sell over 600 different products!
        </p>
        <p class="text-xl text-p text-center">
            At O’Mahony Meats we source our meats from a small selection of EU licensed Irish Suppliers, with whom we have built a long and trusted relationship. 
        </p>
        <br><br>
        <p class="text-xl text-p text-center">
            Beef, Lamb, Pork, Bacon, Chicken &amp; Poultry - we can provide any cut or tailor your order to suit your requirements.<br> <br>
            Simply call the factory on <strong>01 8476000 +1</strong> or Michael on <strong>01 8476000 + 5</strong>
        </p>
    </div>
</div>
<div class="div bgi-g1 pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g3 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Over 600 Products
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>

<div class="bgi-g3">
    <div class="container mx-auto flex flex-wrap justify-center py-12">
        <div class="w-full md:w-1/2 lg:w-1/3 px-2 py-4">
            <div class="flex flex-col">
                <h2 class="bgi-p text-grey-lightest text-center py-2 rounded-t-xlg">Beef</h2>
                <div class="h-10r">
                     <img src="/images/beef.png" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-center  bgi-p py-2 rounded-b-lg group">
                    <button class="text-grey-lightest w-full outline-none active:outline-none focus:outline-none z-20" id="prodBtn1">More</button>
                </div>
                <div class="px-1 py-1 bgi-g1 rounded-b -mt-1 border-b-2 border-p text-sm hidden" id="prodInfo1">
                    <div class="flex justify-between w-full">
                        <div class="w-1/2 flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2">Beef Brisket</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Beef Burgers 4oz-10oz</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Beef Cheeks</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Beef Fillets (whole)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Beef Meatballs 1oz-4oz</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Beef Mince 95VL</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Beef Topside</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Bones </p>
                        </div>
                        <div class="flex flex-col px-4">
                            <hr class="border border-p h-full">
                        </div>
                        <div class="w-1/2 flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2">Diced Beef</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Oxtails</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Picanha</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Rib of Beef</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Rump Roast Beef</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Silverside Corned Beef</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Steaks (Black Angus/Eye of round/ Featherblade/ Fillet/Rib Eye/ Rump/ T-Bone/ etc.)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Tomahawks …and many more!</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-2 py-4">
            <div class="flex flex-col">
                <h2 class="bgi-p text-grey-lightest text-center py-2 rounded-t-xlg"> Pork &amp; Bacon</h2>
                <div class="h-10r">
                     <img src="/images/pork.png" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-center  bgi-p py-2 rounded-b-lg group">
                    <button class="text-grey-lightest w-full outline-none active:outline-none focus:outline-none z-20" id="prodBtn2">More</button>
                </div>
                <div class="px-1 py-1 bgi-g1 rounded-b -mt-1 border-b-2 border-p text-sm hidden" id="prodInfo2">
                    <div class="flex justify-between w-full">
                        <div class="w-45p flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2">Baby Back Loin Ribs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Back Rashers (Plain, Smoked, Maple,...)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Bacon - Diced/ Lardons/ Minced</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Breakfast Packs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Collar of Bacon Joints</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Diced Pork</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Gammon Fillets/ Steaks</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Legs of Pork</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Loins of Pork</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Minced Pork</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Pigs in Blankets</p>
                        </div>
                        <div class="flex flex-col px-4">
                            <hr class="border border-p h-full">
                        </div>
                        <div class="w-45p flex-1 flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2">Pork Belly</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Pork Bones</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Pork Chops</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Pork Escalopes (Plain/ Breaded)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Pork Neck Fillets</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Pork Ribs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Pork Steaks</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Pork Shoulders</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Pudding Black/ White (including Clonakilty)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Sausages (various sizes &amp; flavours)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Streaky Rashers</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-2 py-4">
            <div class="flex flex-col">
                <h2 class="bgi-p text-grey-lightest text-center py-2 rounded-t-xlg">Chicken, Poultry &amp; Eggs</h2>
                <div class="h-10r">
                     <img src="/images/chicken.png" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-center  bgi-p py-2 rounded-b-lg group">
                    <button class="text-grey-lightest w-full outline-none active:outline-none focus:outline-none z-20" id="prodBtn3">More</button>
                </div>
                <div class="px-1 py-1 bgi-g1 rounded-b -mt-1 border-b-2 border-p text-sm hidden" id="prodInfo3">
                    <div class="flex justify-between w-full">
                        <div class="w-1/2 flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2 text-center font-bold">Chicken</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Burgers</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Crowns 550g-950g</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Fillets 150g-250g</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Kiev</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Legs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Liver</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Skewers</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Stroganoff</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Supremes 5oz-7oz (140g-200g)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Thigh Meat</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Wings</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chickens (whole) 900g-1900g</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Diced Chicken Breast/Legs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Halal Chicken Fillets</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Minced Chicken</p>
                            <p class="py-1 border-b border-p border-dashed pb-2 text-center font-bold">Eggs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Hen and Duck Eggs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Farm and Free Range</p>
                        </div>
                        <div class="flex flex-col px-4">
                            <hr class="border border-p h-full">
                        </div>
                        <div class="w-1/2 flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2 text-center font-bold">Turkey</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey - Diced</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey - Whole Fresh</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Breast - Mince</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Burgers</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Butterfly</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Crowns</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Escalopes (Plain or Breaded)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Fillets B/R</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Legs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Meatballs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Sausages</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Turkey Stroganoff</p>
                            <p class="py-1 border-b border-p border-dashed pb-2 text-center font-bold">Duck</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Duck Breasts (230g-280g)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Duck Liver</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Duck Legs</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-2 py-4">
            <div class="flex flex-col">
                <h2 class="bgi-p text-grey-lightest text-center py-2 rounded-t-xlg">Lamb</h2>
                <div class="h-10r">
                     <img src="/images/lamb.png" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-center  bgi-p py-2 rounded-b-lg group">
                    <button class="text-grey-lightest w-full outline-none active:outline-none focus:outline-none z-20" id="prodBtn4">More</button>
                </div>
                <div class="px-1 py-1 bgi-g1 rounded-b -mt-1 border-b-2 border-p text-sm hidden" id="prodInfo4">
                    <div class="flex justify-between w-full">
                        <div class="w-1/2 flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2">Diced Lamb</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Gigot Lamb Chops</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Halal Lamb</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Lamb Chops</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Lamb Fillets</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Lamb Heart, Kidney &amp; Liver</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Lamb Meatballs</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Lamb Neck Fillets</p>
                        </div>
                        <div class="flex flex-col px-4">
                            <hr class="border border-p h-full">
                        </div>
                        <div class="w-1/2 flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2">Lamb Shanks</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Lamb Stroganoff</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Legs of Lamb</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Minced Lamb</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Racks of Lamb</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Shoulders of Lamb B&amp;R</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Spring Lambs (Whole)</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Sweetbreads</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-2 py-4">
            <div class="flex flex-col">
                <h2 class="bgi-p text-grey-lightest text-center py-2 rounded-t-xlg">Cooked Meats</h2>
                <div class="h-10r">
                     <img src="/images/cooked.png" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-center  bgi-p py-2 rounded-b-lg group">
                    <button class="text-grey-lightest w-full outline-none active:outline-none focus:outline-none z-20" id="prodBtn5">More</button>
                </div>
                <div class="px-1 py-1 bgi-g1 rounded-b -mt-1 border-b-2 border-p text-sm hidden" id="prodInfo5">
                    <div class="flex justify-between w-full">
                        <div class="w-1/2 flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2">Beef Lasagne</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Beef Shepherd’s Pie </p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Chicken Nuggets</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Cooked Chicken - Sliced</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Cooked Gammon</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Cooked Ham - Sliced </p>
                        </div>
                        <div class="flex flex-col px-4">
                            <hr class="border border-p h-full">
                        </div>
                        <div class="w-1/2 flex flex-col justify-around px-2">
                            <p class="py-1 border-b border-p border-dashed pb-2">Cooked Turkey Fillets</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Corned Beef Joint</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Roast Beef - Sliced</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Ham &amp; Turkey Portions</p>
                            <p class="py-1 border-b border-p border-dashed pb-2">Southern Fried Chicken</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="image-gallery-container bgi-s">
    <div class="image-gallery bgi-s my-xl">
        <img src="/images/slider/1.jpg" alt="">
        <img src="/images/slider/2.jpg" alt="">
        <img src="/images/slider/3.jpg" alt="">
        <img src="/images/slider/4.jpg" alt="">
        <img src="/images/slider/5.jpg" alt="">
        <img src="/images/slider/6.jpg" alt="">
        <img src="/images/slider/7.jpg" alt="">
        <img src="/images/slider/8.jpg" alt="">
        <img src="/images/slider/9.jpg" alt="">
        <img src="/images/slider/10.jpg" alt="">
        <img src="/images/slider/11.jpg" alt="">
        <img src="/images/slider/12.jpg" alt="">
        {{-- <img src="/images/gallery13.jpg" alt=""> --}}
        
 
@endsection

@section('scripts')
@parent
<script>
    // Beef
    const prodAnimation1 = new TimelineMax({paused:true, reversed:true});
     
    prodAnimation1.to('#prodInfo1', .7, {opacity:1, display: 'flex', height: '25rem', zIndex: '0', ease: Back.easeOut});
    prodAnimation1.fromTo('#prodInfo1>div>', .5, {opacity: 0, }, {opacity: 1});
     

    function showProd1() {
            prodAnimation1.reversed() ? prodAnimation1.play() : prodAnimation1.reverse();
        }

    const prodBtn1 = document.getElementById('prodBtn1');
    const prodInfo1 = document.getElementById('prodInfo1');

    prodBtn1.addEventListener('click', showProd1);

    // Pork & Bacon
    const prodAnimation2 = new TimelineMax({paused:true, reversed:true});
     
    prodAnimation2.to('#prodInfo2', 1, {opacity:1, display: 'flex', height: '30rem', zIndex: '0', ease: Back.easeOut});
    prodAnimation2.fromTo('#prodInfo2>div>', .5, {opacity: 0, }, {opacity: 1});
     

    function showProd2() {
            prodAnimation2.reversed() ? prodAnimation2.play() : prodAnimation2.reverse();
        }

    const prodBtn2 = document.getElementById('prodBtn2');
    const prodInfo2 = document.getElementById('prodInfo2');

    prodBtn2.addEventListener('click', showProd2);

    // Chicken Poultry & Eggs
    const prodAnimation3 = new TimelineMax({paused:true, reversed:true});
     
    prodAnimation3.to('#prodInfo3', 1, {opacity:1, display: 'flex', height: '48rem', zIndex: '0', ease: Back.easeOut});
    prodAnimation3.fromTo('#prodInfo3>div>', .5, {opacity: 0, }, {opacity: 1});
     

    function showProd3() {
            prodAnimation3.reversed() ? prodAnimation3.play() : prodAnimation3.reverse();
        }

    const prodBtn3 = document.getElementById('prodBtn3');
    const prodInfo3 = document.getElementById('prodInfo3');

    prodBtn3.addEventListener('click', showProd3);

    // Lamb
    const prodAnimation4 = new TimelineMax({paused:true, reversed:true});
     
    prodAnimation4.to('#prodInfo4', 1, {opacity:1, display: 'flex', height: '20rem', zIndex: '0', ease: Back.easeOut});
    prodAnimation4.fromTo('#prodInfo4>div>', .5, {opacity: 0, }, {opacity: 1});
     

    function showProd4() {
            prodAnimation4.reversed() ? prodAnimation4.play() : prodAnimation4.reverse();
        }

    const prodBtn4 = document.getElementById('prodBtn4');
    const prodInfo4 = document.getElementById('prodInfo4');

    prodBtn4.addEventListener('click', showProd4);
    
    // Cooked Meats 
    const prodAnimation5 = new TimelineMax({paused:true, reversed:true});
     
    prodAnimation5.to('#prodInfo5', 1, {opacity:1, display: 'flex', height: '18rem', zIndex: '0', ease: Back.easeOut});
    prodAnimation5.fromTo('#prodInfo5>div>', .5, {opacity: 0, }, {opacity: 1});
     

    function showProd5() {
            prodAnimation5.reversed() ? prodAnimation5.play() : prodAnimation5.reverse();
        }

    const prodBtn5 = document.getElementById('prodBtn5');
    const prodInfo5 = document.getElementById('prodInfo5');

    prodBtn5.addEventListener('click', showProd5);
</script>
@endsection