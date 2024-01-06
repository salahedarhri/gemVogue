@extends('layouts.client')

@section('content')

    <!-- First part -->
    <div class="w-full bg-third">
      <div class="font-playfair grid md:grid-cols-2 max-md:grid-cols-1 justify-center align-center max-w-7xl mx-auto text-first lg:py-8">
        <div class="flex flex-col p-8 justify-evenly">
          <p class="md:text-4xl max-md:text-2xl font-semibold py-4">Votre destination unique pour des pièces de bijouterie  uniques et exquises.</p>
          <p class=" text-md py-2 font-dmsans">
            Ici, nous proposons différents types de bijoux, notamment des colliers, des bracelets, des boucles d'oreilles et des bagues. Des designs classiques aux styles modernes, nous avons quelque chose pour chacun.          </p>
          <a href="#" class="bg-second text-third text-lg text-center py-3 px-6 w-fit rounded-l-full my-4 font-semibold hover:bg-secondDarker hover:text-white transition">
          Découvrir la collection</a>
        </div>
      
        <div class="flex items-center">
          <img src="{{ asset('images/composants/landing-redhead.png')}}"
            alt="landing image" srcset="" class="object-cover align-center">
        </div>
      </div>
    </div>
    
    <!-- Second part -->
    <div class="font-playfair w-full bg-white text-first py-6">
      <p class="text-center text-2xl p-4">Notre Collection</p>
  
      <div class="grid md:grid-cols-3 max-md:grid-cols-1 max-w-4xl mx-auto justify-between gap-12 md:py-6 max-md:items-center text-lg font-semibold">
        
        <div class="relative aspect-square max-md:max-w-xs mx-auto">
          <img class="object-cover w-full h-full" src="{{ asset('images/composants/landing-earrings.png')}}" alt="landing earrings" srcset="">
          <a href="{{ route('shopCategoryFilter',['typeBijou' =>'boucles oreilles'])}}" 
            class="absolute top-3/4 left-0 bg-second hover:bg-secondDarker transition text-third hover:text-white text-center p-2 w-48 rounded-r-full shadow-xl my-4">Boucles d'oreilles</a>
        </div>
        
        <div class="relative aspect-square max-md:max-w-xs mx-auto">
          <img class="object-cover w-full h-full" src="{{ asset('images/composants/landing-necklace.png')}}" alt="landing necklace" srcset="">
          <a href="{{ route('shopCategoryFilter',['typeBijou' =>'Collier'])}}" 
            class="absolute top-3/4 left-0 bg-second hover:bg-secondDarker transition text-third hover:text-white text-center p-2 w-48 rounded-r-full shadow-xl my-4">Colliers</a>
        </div>
        
        <div class="relative aspect-square max-md:max-w-xs mx-auto">
          <img class="object-cover w-full h-full" src="{{ asset('images/composants/landing-ring.png')}}" alt="landing ring" srcset="">
          <a href="{{ route('shopCategoryFilter',['typeBijou' =>'Anneau'])}}" 
            class="absolute top-3/4 left-0 bg-second hover:bg-secondDarker transition text-third hover:text-white text-center p-2 w-48 rounded-r-full shadow-xl my-4">Bagues</a>
        </div>
      </div>
    </div>
  
    <!-- Third part -->
    <div class="font-playfair w-full bg-third">
     <div class="flex flex-col justify-evenly md:py-16 md:px-6 max-md:p-8 max-w-4xl mx-auto  text-center text-first">
      <p class="text-2xl font-semibold md:pb-12 max-md:pb-6">
        Un diamant est le meilleur ami d'une femme !
      </p>
      <p class="font-dmsans ">
        Un diamant est un symbole intemporel de beauté et d'amitié, en faisant le cadeau parfait pour toute femme. On dit souvent que les diamants sont les meilleurs amis d'une femme, et cela a du sens.
        Non seulement un diamant représente une loyauté et une dévotion inébranlables, mais c'est aussi un symbole de luxe, de glamour et de classe. Un diamant dit au monde que vous êtes fier de votre bien-aimée et que vous souhaitez lui offrir seulement le meilleur.
        Comme l'a dit Coco Chanel, "Un diamant est l'éternité, il est réel et il est incassable".
      </p>
     </div>
    </div> 

    <!-- Jewels -->
    <div class="w-full bg-white">
      <div class="max-w-7xl mx-auto grid grid-cols-4 max-md:grid-cols-2 max-sm:grid-cols-1 place-items-center">


      </div>
    </div>

    <!-- Fourth part -->
    <div class="w-full bg-third text-first border-t border-secondDarker">
      <div class="max-w-7xl mx-auto grid grid-cols-2 max-md:grid-cols-1 md:gap-4 place-items-center ">

        <img src="{{ asset('images/composants/landing-4women.png')}}" alt="4women" class="object-cover object-center max-md:h-96 w-auto md:p-6 max-md:p-4">

        <div class="flex flex-col gap-4 max-md:text-center justify-center p-4">

          <h4 class="font-playfair text-2xl font-bold">Nous conçernant</h4>
          <p class="font-dmsans px-2">Nous sommes cinq amis passionnés de bijoux uniques.
             Que ce soit des colliers de perles élaborés ou des bracelets élégants, notre créativité brille dans chaque pièce. La collaboration est clé, et ensemble, nous explorons de nouvelles idées et techniques.<br><br> De la sélection des meilleurs matériaux aux touches finales, chaque étape nous remplit de fierté.
             Au cœur de notre entreprise, un amour véritable pour la création de bijoux.
              Nous sommes impatients de partager cette passion avec vous.</p>

        </div>

      </div>

    </div>

    <!-- Fifth part -->

     {{-- Ancien page d'accueil --}}
    {{-- <div class="w-full h-largeHeight bg-top bg-no-repeat bg-cover" style="background-image:url({{ asset('images/composants/landing-md.jpg') }})">
      <div class="w-full h-full relative">

        <div class="absolute left-10 md:top-1/2 md:right-2/3 p-4  max-md:top-3/4 max-md:left-1/2">
          <p class="text-3xl text-whiteBeige font-serif max-md:text-xl">Des bijouteries exquices près de vous</p>
        </div>

        <div class="w-full h-full bg-slate-800 bg-opacity-30"></div>
      </div>
    </div> --}}

@endsection

