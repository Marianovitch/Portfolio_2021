<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tails Downloaded File</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">

</head>
<body>

<!-- Section 1 -->
<section class="relative w-full min-h-screen bg-cover overflow-hidden bg-black" x-data="{ showMenu: false }">

    <!-- style="background-image: url(https://images.unsplash.com/photo-1533693706533-57740e69765d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2700&amp;q=80);"-->
    <!-- <div class="absolute inset-0 z-0 h-full bg-blue-600 opacity-25"></div> -->

    <video autoplay loop muted class="absolute z-10 w-auto min-h-full min-w-full max-w-none ">
        <source src="https://assets.mixkit.co/videos/preview/mixkit-abstract-figures-and-illustrations-moving-4979-large.mp4" type="video/mp4"/>
        Your browser does not support the video tag.
    </video>

    <!-- Desktop menu -->
    <div class="flex items-center w-full h-20">
        <nav class="hidden w-full md:block" x-show="!showMenu">
            <ul class="relative z-10 flex items-center px-6 text-sm text-white lg:text-2xl">
                <li class="mx-2 lg:mx-3">
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                        <span class="block">First Link</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-pink894" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </li>
                <li class="mx-2 lg:mx-3">
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                        <span class="block">Second Link</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-pink894" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </li>
                <li class="mx-2 lg:mx-3">
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                        <span class="block">Third Link</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-pink894" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </li>
                <li class="mx-auto">
                    <!--
                    <a href="#_" class="w-1/4 py-4 pl-6 pr-4 md:pl-4 md:py-0">
                        <span class="text-3xl font-black leading-none text-white select-none logo">tails<span class="text-pink-600">.</span></span>
                    </a>
                    -->
                </li>
                <li class="mx-2 lg:mx-3">
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                        <span class="block">Fourth Link</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-blue894" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </li>
                <li class="mx-2 lg:mx-3">
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                        <span class="block">Fifth Link</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-blue894" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </li>
                <li class="mx-2 lg:mx-3">
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                        <span class="block">Sixth Link</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-blue894" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Desktop menu -->

        <!-- Mobile Nav  -->
        <nav class="fixed top-0 z-30 flex flex-col flex-wrap items-center justify-between w-full h-auto px-6 md:hidden">
            <div class="relative z-30 flex items-center justify-between w-full h-20">
                <a href="#_" class="flex items-center flex-shrink-0 mr-6 text-white">
                    <span class="text-3xl font-black leading-none text-white select-none logo">tails<span class="text-pink-600">.</span></span>
                </a>
                <div class="block lg:hidden">
                    <button @click="showMenu = !showMenu" class="flex items-center justify-center w-10 h-10 text-gray-200 rounded-full hover:text-white hover:bg-white hover:bg-opacity-25 focus:outline-none">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <!-- End Mobile Nav -->
    </div>

    <!-- Mobile Menu -->
    <div x-show.transition="showMenu" class="absolute top-0 z-20 flex flex-col items-center justify-center w-full h-full space-y-5 text-lg origin-center bg-pink-600" style="display: none;">
        <a href="#_" class="block text-blue894 hover:text-white">First Link</a>
        <a href="#_" class="block text-blue894 hover:text-white">Second Link</a>
        <a href="#_" class="block text-blue894 hover:text-white">Third Link</a>
    </div>
    <!-- End Mobile Menu -->

    <div class="container flex items-center justify-center h-auto mx-auto">

        <div class="z-10 flex flex-col items-center px-8 xl:px-0">
            <img class="w-6/12 py-2 mt-8" src="https://e7.pngegg.com/pngimages/1024/692/png-clipart-thumper-faline-bambi-s-mother-youtube-bambi.png" >
            <h1 class="mx-6 mt-5 text-xl text-5xl text-center text-white lg:text-6xl sm:text-center sm:mx-0" style="font-family: Major Mono Display">Laboratoire <br class="block lg:hidden">Artistique</h1>

            <p class="w-2/3 my-6 text-xl font-normal text-center text-gray-200"><!-- The ultimate toolset to help you expand your creative portfolio, craft your skills, and build the next million dollar applicaiton. --></p>

            <div class="flex justify-center md:mt-10">
                <!-- <a href="#" class="px-8 py-2 m-2 text-center text-white bg-pink-600 border-2 border-pink-600 hover:bg-transparent rounded-none rounded-md">Get Started</a> -->
                <a href="#" class="px-8 py-2 mt-12 text-center text-white border-2 border-pink-600 hover:bg-pink-600 rounded-none rounded-md">Learn More</a>
            </div>
        </div>

    </div>
</section>

<!-- ################################################################################################################################################################################################################################### -->
<!-- ################################################################################################################################################################################################################################### -->

<!-- Section 1 -->
<section class="w-full px-8 text-gray-700 bg-white body-font">
    <div class="container flex flex-col flex-wrap items-center py-5 mx-auto max-w-7xl md:flex-row">
        <nav class="flex flex-wrap items-center pb-5 text-base md:w-2/5 md:pb-0">
            <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Home</a>
            <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Features</a>
            <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
            <a href="#_" class="font-medium leading-6 text-gray-600 md:mr-5 hover:text-gray-900">Blog</a>
        </nav>
        <a href="#_" class="flex items-center order-first mb-6 font-medium text-gray-900 md:order-none md:w-1/5 title-font md:items-center md:justify-center md:mb-0">
            <span class="text-xl font-black leading-none text-gray-900 select-none logo">tails<span class="text-indigo-600">.</span></span>
        </a>
        <div class="inline-flex items-center space-x-6 md:w-2/5 md:justify-end">
            <a href="#_" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                Sign in
            </a>
            <a href="#_" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 bg-pink-500">
                Sign up
            </a>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="w-full py-20 bg-gray-50">
    <div class="px-10 mx-auto max-w-7xl">
        <div class="px-10 mb-8 space-y-5 lg:px-0 lg:text-center lg:mb-16">
            <h2 class="text-4xl font-bold sm:text-5xl text-blue-400">C'est tout un art</h2>
            <p class="text-lg text-gray-600 w-ful sm:text-xl">Une multitude d'oeuvres à découvrir, des concepts et des couleurs à foisons.</p>
        </div>
        <div class="grid overflow-hidden lg:rounded-xl">
            <div class="grid items-center lg:grid-cols-2">
                <div class="flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0">
                    <h3 class="text-2xl font-semibold sm:text-4xl text-green-200 font-bold">Graphisme</h3>
                    <p class="text-lg text-gray-600 font-bold">Un ordinateur, des logiciels qui mettent à découvert, des heures pour savoir les utiliser et nous voilà ! On peut désormais dire qu'on fait du GRAPHISME.</p>
                </div>
                <div class="overflow-hidden bg-gray-100 h-96">
                    <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=3270&amp;q=80" class="object-cover w-full h-full" alt="">
                </div>
            </div>

            <div class="grid items-center lg:grid-cols-2">
                <div class="order-last overflow-hidden bg-gray-100 h-96 lg:order-first">
                    <img src="https://images.unsplash.com/photo-1541506618330-7c369fc759b5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1665&amp;q=80" class="object-cover w-full h-full" alt="">
                </div>
                <div class="flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0">
                    <h3 class="text-2xl font-semibold sm:text-4xl text-orange-400 font-bold">Peinture</h3>
                    <p class="text-lg text-left text-gray-600 text-bold font-bold">Des pinceaux, des toiles,  des tâches sur tous les vêtements, beaucoup de créativité et pas assez de murs pour les afficher.</p>
                </div>
            </div>

            <div class="grid items-center lg:grid-cols-2">
                <div class="flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0">
                    <h3 class="text-2xl font-semibold sm:text-4xl text-purple-300 font-bold">Dessin </h3>
                    <p class="text-lg text-gray-600 font-bold">Du papier, un crayon, retour aux basiques. On est loin du style de Michel Ange, le nombre d'or n'est toujours pas acquis mais on voyage quand même à travers les courbes.</p>
                </div>
                <div class="bg-gray-100 h-96">
                    <img src="https://images.unsplash.com/photo-1416339442236-8ceb164046f8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=3203&amp;q=80" class="object-cover w-full h-full" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3 -->
<section class="py-8 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24">
    <div class="max-w-6xl px-4 px-10 mx-auto border-solid lg:px-12">
        <div class="flex flex-col items-start leading-7 text-gray-900 border-0 border-gray-200 lg:items-center lg:flex-row">
            <div class="box-border flex-1 text-center border-solid sm:text-left">
                <h2 class="m-0 text-4xl font-semibold leading-tight tracking-tight text-left border-0 border-gray-200 sm:text-5xl font-bold text-blue-300">Découvrez nos offres</h2>
                <p class="mt-2 text-xl text-left border-0 border-gray-200 sm:text-2xl text-black">Promis on vous fera pas vendre un rein</p>
            </div>
            <a href="#_" class="inline-flex items-center justify-center w-full px-5 py-4 mt-6 ml-0 font-sans text-base leading-none text-white no-underline border border-indigo-600 border-solid rounded cursor-pointer md:w-auto lg:mt-0 hover:bg-indigo-700 hover:border-indigo-700 hover:text-white focus-within:bg-indigo-700 focus-within:border-indigo-700 focus-within:text-white sm:text-lg lg:ml-6 md:text-xl bg-pink-400">
                Get Started
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Section 4 -->
<section class="w-full px-10 bg-gray-50 lg:px-0">
    <div class="max-w-4xl py-20 mx-auto">
        <h2 class="flex justify-start w-full text-4xl font-black text-left md:text-5xl md:text-center md:justify-center">
            <span class="text-green-300">Nos services</span>
            <img src="https://cdn.devdojo.com/images/october2021/shooting-star.png" class="w-12 h-12 ml-4">
        </h2>
        <div class="grid gap-10 pt-16 pb-10 md:grid-cols-2">
            <div class="relative p-10 space-y-2 border border-gray-200 rounded-lg">
                <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" class=""></path></svg>
                <h3 class="text-2xl font-bold text-blue-300">Des étiquettes aux normes </h3>
                <p class="font-bold text-grey-500">Parce que faire des bougies et des fondants c'est bien, mais mettre la clé sous la porte au premier contrôle ça l'est moins. On vous accompagne dans vos étiquettages avec toutes les normes au bout des doigts.</p>
                <a href="#_" class="inline-block font-medium text-yellow-500 underline">Learn More</a>
            </div>
            <div class="relative p-10 space-y-2 border border-gray-200 rounded-lg">
                <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" class=""></path></svg>
                <h3 class="text-2xl font-bold text-orange-300">Des étiquettes mignonnes</h3>
                <p class="font-bold">Pour tous vos projets, une étiquette qui a de la gueule c'est quand même plus vendeur qu'un simple nom en Arial. Lâchez Canva tout de suite ! On vous promets bien mieux.</p>
                <a href="#_" class="inline-block font-medium text-yellow-500 underline">Learn More</a>
            </div>
            <div class="relative p-10 space-y-2 border border-gray-200 rounded-lg">
                <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                <h3 class="text-2xl font-bold text-purple-300">Des tableaux extraordinaires</h3>
                <p class="text-gray-700 font-bold">On a pas les chevilles qui enflent mais on vous promets que celui là, il ira parfaitement au dessus de votre canapé, et qu'il va plaîre à tous vos copains.</p>
                <a href="#_" class="inline-block font-medium text-yellow-500 underline">Learn More</a>
            </div>
            <div class="relative p-10 space-y-2 border border-gray-200 rounded-lg">
                <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" class=""></path></svg>
                <h3 class="text-2xl font-bold text-pink-400">Des visuels pour la Com'</h3>
                <p class="text-gray-700 font-bold">Que ce soit de la communication sur les réseaux ou dans la rue, on vous accompagne pour vous faire connaître de tous et être enfin reconnu à votre juste valeur.</p>
                <a href="#_" class="inline-block font-medium text-yellow-500 underline">Learn More</a>
            </div>
            <div class="relative p-10 space-y-2 border border-gray-200 rounded-lg">
                <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <h3 class="text-2xl font-bold text-green-300">Des sites web uniques</h3>
                <p class="text-gray-700 font-bold">Marre d'avoir le même site que Micheline ? En plus tu fais presque pas de vente dessus ? Laisse nous les manettes et tu vas décoller.</p>
                <a href="#_" class="inline-block font-medium text-yellow-500 underline">Learn More</a>
            </div>
            <div class="relative p-10 space-y-2 border border-gray-200 rounded-lg">
                <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" class=""></path></svg>
                <h3 class="text-2xl font-black text-red-400">La carte de visite pimpante</h3>
                <p class="text-gray-700 font-bold">La carte de visite qui vous représente, et qui vous rendra inoubliable. Avec celle-là, même le prince charmant vous appellera.</p>
                <a href="#_" class="inline-block font-medium text-yellow-500 underline">Learn More</a>
            </div>
        </div>
        <div class="w-full mt-10 mb-2 text-center">
            <a href="#_" class="mx-auto text-lg font-medium text-yellow-500 underline">View All our Features</a>
        </div>
    </div>
</section>

<!-- Section 5 -->
<section class="relative py-16 bg-white min-w-screen animation-fade animation-delay">
    <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
        <p class="font-bold text-left text-pink-500 uppercase sm:text-center sm:text-normal sm:font-bold sm:mx-8">Posez votre question, pas sûr qu'on y réponde</p>
        <h3 class="mt-1 text-2xl font-bold text-left sm:mx-6 sm:text-3xl md:text-4xl lg:text-5xl sm:text-center sm:mx-0">Question que vous ne devez plus poser</h3>
        <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold sm:text-xl md:text-2xl text-purple-400">Pourquoi je dois payer ?</h3>
            <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal font-bold">Parce qu'après essai, NON  on ne vit pas d'amour et d'eau fraîche.</p>
        </div>
        <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold sm:text-xl md:text-2xl text-yellow-300">Est-ce que vous travaillez 24h/24 ?</h3>
            <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal font-bold">Malheureusement j'ai une vie personnelle.</p>
        </div>
        <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold sm:text-xl md:text-2xl text-orange-400">Est-ce que je peux payer plus tard ?</h3>
            <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal font-bold">Non car mon frigo est vide et que Monoprix ne fait pas crédit.</p>
        </div>
        <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold sm:text-xl md:text-2xl text-green-300">Pourquoi c'est si cher ?</h3>
            <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal font-bold">Parce que j'y passe du temps, et que le temps c'est de l'argent.</p>
        </div>
    </div>
</section>

<!-- Section 6 -->
<section class="bg-white">
    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center -mx-5 -my-2">
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    About
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Blog
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Team
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Pricing
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Contact
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Terms
                </a>
            </div>
        </nav>
        <div class="flex justify-center mt-8 space-x-6">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
            © 2021 SomeCompany, Inc. All rights reserved.
        </p>
    </div>
</section>

<!-- AlpineJS Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>
</html>
