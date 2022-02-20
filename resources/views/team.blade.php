@extends('layouts.vue')

@section('header')
<header class="text-gray-600 body-font border-b-2 border-inherit">
  <div class="container mx-auto flex flex-wrap pt-5 flex-col md:flex-row items-center ">
        <div class="md:w-64 flex-shrink-0 flex link-align">
          <a class="link-style">Tree</a>
          <a class="link-style">Left structure</a>
          <a class="link-style">Right structure</a>
          <a class="link-style">Direct referrals</a>
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

<team-component></team-component>
@endsection