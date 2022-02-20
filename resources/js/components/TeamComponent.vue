<template>
  <div class="container">
    <div class="flex flex-col">

<!--first row-->
      <div class="flex first-content">
      <div>
        <p class="tree-text">Tree</p>
        </div>
        <div class="relative">
        <button type="submit" class="absolute p-2 mt-1 ml-2">
          <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
            width="512px" height="512px">
            <path
              d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
        </button>
        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
          type="search" name="search" placeholder="Search transaction id">
      </div>
      </div>

<!--second row-->

<div class="flex second-content mt-4">
<div class="relative">
<p class="absolute right-0 p-2 mr-5"> Active</p>
      <img src="/images/active.svg" alt="active">
      
      </div>

      <div class="relative">
<p class="absolute right-0 p-2 mr-5"> Inactive</p>
      <img src="/images/inactive.svg" alt="inactive">
      </div>

      <div class="relative">
<p class="absolute right-0 p-2 mr-5"> Absent</p>
      <img src="/images/absent.svg" alt="absent">
      </div>

      <div class="relative">
<p class="absolute right-0 p-2 mr-5"> Block</p>
      <img src="/images/block.svg" alt="block">
      </div>
</div>


<!--third row-->

<div class="flex third-content justify-center mt-4">
<div class="middle-circle relative">
    <div class="inner-circle absolute">
    <div class="innerr-content">
     <img class="ml-4 w-10 h-10 rounded-full" src="/images/member-avatar-01.png" alt="Avatar of Jonathan Reinink">
    <p class="name-text">Katie Robson</p>
    <p class="id-text">TRX25478461</p>
    </div>
    </div>
</div>
</div>


<!--fourth row-->
<div class="flex fourth-content justify-center mt-4">
<div class="two-img-section flex">
<div class="relative">
   <img src="/images/Group 11137.svg" alt="Group 11137" class="left-img">
   <div class="absolute top-0 p-4 ml-3">
   <p class="name-text">Katie Robson</p>
    <p class="id-text">TRX25478461</p>
   </div>
   <div class="absolute top-0 right-0 p-4 mr-2">
   <img class="ml-4 w-10 h-10 rounded-full" src="/images/member-avatar-01.png" alt="Avatar of Jonathan Reinink">
    </div>
</div>
<div class="right-green-img">
<img src="/images/Group 11137.svg" alt="Group 11137" class="left-img">
<div class="absolute top-0 right-0 p-4 ml-3">
   <img class="ml-4 w-10 h-10 rounded-full" src="/images/member-avatar-01.png" alt="Avatar of Jonathan Reinink">
    </div>
<div class="absolute top-0 p-4 ml-3">
   <p class="name-text"></p>
    <p class="id-text"></p>
   </div>
   </div>
</div>
</div>
</div>





<!--fifth row-->
<div class="flex fifth-content justify-center mt-4">
<div class="flex">
<div class="flex item-align">
<div class="relative">
    <img src="/images/active_green.png" class="img-alt">
    <div class="absolute top-0 p-3 ml-3">
   <img class="ml-4 w-10 h-10 rounded-full" src="/images/member-avatar-01.png" alt="Avatar of Jonathan Reinink">
    </div>
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div>
    </div>

    <div class="relative">
    <img src="/images/inactive.png" class="img-alt">
    <div class="absolute top-0 p-3 ml-3">
   <img class="ml-4 w-10 h-10 rounded-full" src="/images/member-avatar-01.png" alt="Avatar of Jonathan Reinink">
    </div>
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div>
    </div>
    </div>



    <div class="flex item-align">
    <div class="relative">
    <img src="/images/absent.png" class="img-alt">
    <div class="absolute top-0 p-3 ml-3">
   <img class="ml-4 w-10 h-10 rounded-full" src="/images/member-avatar-01.png" alt="Avatar of Jonathan Reinink">
    </div>
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div>
    </div>

    <div class="relative">
    <img src="/images/block.png" class="img-alt">
    <div class="absolute top-0 p-3 ml-3">
   <img class="ml-4 w-10 h-10 rounded-full" src="/images/member-avatar-01.png" alt="Avatar of Jonathan Reinink">
    </div>
    <div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div>   
    </div>
    </div>
</div>
</div>


<!--sixth row-->
<div class="flex justify-center mt-4">
<div class="flex">
<div class="relative">
<img src="/images/purple.svg" class="last-img">
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div> 
</div>
<div class="relative">
<img src="/images/purple2.svg" class="last-img">
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div> 
</div>

<div class="relative">
<img src="/images/orange.svg" class="last-img">
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div> 
</div>


<div class="relative">
<img src="/images/orange.svg" class="last-img">
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div> 
</div>

<div class="relative">
<img src="/images/orange.svg" class="last-img">
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div> 
</div>


<div class="relative">
<img src="/images/orange.svg" class="last-img">
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div> 
</div>



<div class="relative">
<img src="/images/Path 64234.svg" class="last-img">
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div> 
</div>

<div class="relative">
<img src="/images/Path 64234.svg" class="last-img">
<div class="absolute bottom-0 p-3 text-xs">
   <p class="name-text">Solly Robson</p>
   </div> 
</div>



</div>
</div>




























    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
