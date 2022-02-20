@extends('layouts.vue')

@section('header')
<header class="text-gray-600 body-font border-b-2 border-inherit">
  <div class="container mx-auto flex flex-wrap pt-5 flex-col md:flex-row items-center ">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">Good Morning Greece</span>
          <span class="mt-1 text-gray-500 text-sm">My IP Address 141.101.98.245</span>
        </div>
    
  
    <div class="inline-flex items-center bg-white rounded-lg border shadow-md p-2">
    <div class="text-sm">
        <p class="text-inherit text-xs leading-none mr-4">TRX2612571</p>
      </div>
      <img class="w-5 h-5 rounded-full" src="/images/member-avatar-01.png" alt="Avatar of Jonathan Reinink">
      
    </div>
  </div>
</header>


@endsection
@section('content')

<card-component></card-component>
@endsection