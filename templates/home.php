<?php
    // Récupération de la page courante
    $currentPage = $_SERVER['REQUEST_URI']; // '/quelque-chose'
?>


<div class="bg-gray-50 py-24 sm:py-32">
  <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
    <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
      <div class="relative lg:row-span-2">
        <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
          <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
            <p class="mt-2 text-lg font-medium<?= $currentPage == '/projects' ? ' tracking-tight text-gray-950 max-lg:text-center"' : '' ?>"><a href="/projects">Mon travail</a>
            </li>
          </div>
          <div class="@container relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
            <div class="absolute inset-x-10 top-5 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[1cqw] border-t-[1cqw] border-gray-700 bg-gray-900 shadow-2xl">
              <img class="size-full object-cover object-top" src="../images/home_2.png" alt="">
            </div>
          </div>
        </div>

      </div>
      <div class="relative max-lg:row-start-1">
        <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <p class="mt-2 text-lg font-medium <?= $currentPage == '/skills' ? ' tracking-tight text-gray-950 max-lg:text-center' : '' ?>"><a href="/skills">Mon parcour</a>
          </div>
          <div class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
            <img class="w-full max-lg:max-w-xs" src="../images/home_3.png" alt="">
          </div>
        </div>
      
      </div>
      <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
        <div class="absolute inset-px rounded-lg bg-white"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-xl">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <p class="mt-2 text-lg font-medium <?= $currentPage == '/contact' ? 'tracking-tight text-gray-950 max-lg:text-center' : '' ?>"><a href="/contact">Me contacter</a>
            
          </div>
          <div class="flex flex-1 items-center justify-center  px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
            <img class=""w-full max-lg:max-w-xs "" src="../images/home_4.png" alt="">
          </div>
        </div>
        
      </div>
      <div class="relative lg:row-span-2">
        <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
          <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
            <p class="mt-2 text-lg font-medium <?= $currentPage == '/about' ? 'tracking-tight text-gray-950 max-lg:text-center' : '' ?>"><a href="/about">Me découvrir</a>
          </div>
          <div class="relative min-h-[30rem] w-full grow">
            <div class="absolute top-10 right-0 bottom-0 left-10 overflow-hidden rounded-xl bg-gray-900 shadow-2xl">
            <a href="/about"><img class="size-full object-cover object-top" src="../images/home_1.png" alt="">
             
               
                
                </div>
              </div>
              <div class="px-6 pt-6 pb-14">
                <!-- Your code example -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
