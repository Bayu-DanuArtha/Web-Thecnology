<x-template-layout>

<div class="bg-white">

  <form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
    <div class="relative right-2.5 m-2 justify-center">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none mx-20">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block p-4 pl-10 w-96 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mx-20 inset-y-0 md:right-0 " placeholder="Search Mockups, Logos..." required="">
        <button type="submit" class="text-white absolute ml-96 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Search</button>
    </div>
  </form>

<!--Products in Store-->

  <div class="mx-auto max-w-2xl py-16 px-4 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>
    

    <div class="grid grid-cols-2 gap-y-10 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    @foreach($data as $item)
      <x-responsive-nav-link :href="route('paracetamol')" :active="request()->routeIs('paracetamol')">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="/asset/{{$item->name}}.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">{{$item->name}}</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">Rp {{$item->harga}},00-</p>
      </x-responsive-nav-link>
      @endforeach
    
    </div>
  </div>
</div>

</x-template-layout>