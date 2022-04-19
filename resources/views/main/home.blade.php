<?php 
use Illuminate\Support\Str;
?>

@extends("layouts.main")

@section("content")
<div class="p-4 text-white">
 <div class="w-full md:w-4/5 mx-auto mb-4">
   <div>
     <form action="/siswa/logout" method="post">
       @csrf
       <button type="submit" class="px-6 py-2.5 bg-sky-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg transition duration-150 ease-in-out md:w-max w-full">Logout</button>
     </form>
   </div>
 </div>
 <div class="w-full md:w-4/5 mx-auto grid grid-cols-12 gap-4">
   
   <div class="col-span-12 md:col-span-8 p-4 bg-sky-400 shadow-md">
     <div class="border-b-2 border-white py-2 flex justify-between items-center">
       <h1 class="text-lg font-bold">{{ auth()->user()->nisn }}</h1>
       <p class="py-2 px-4 text-xs bg-sky-500 shadow-md shadow-sky-500/50 font-bold">{{ auth()->user()->class }}</p>
     </div>
     <div class="py-2 mt-2 md:flex md:justify-between md:items-start">
       <h1 class="text-2xl mdw-1/2 font-semibold uppercase text-center md:text-left">{{ auth()->user()->fullname }}</h1>
       <p class="text-sm py-2 px-4 bg-sky-500 shadow-md shadow-sky-500/50 mt-4 md:mt-0 text-center md:inline-block font-medium">{{ auth()->user()->exam_num }}</p>
     </div>
   </div>
   
   @if(auth()->user()->isPaid === "LUNAS")
   <div class="col-span-12 md:col-span-4 p-4 {{ auth()->user()->isPass === 'LULUS' ? 'bg-green-400' : 'bg-red-400' }} shadow-md">
     <div class="md:flex md:flex-col md:justify-between h-full">
       <div class="flex space-x-2 justify-center md:block md:space-x-0">
         <p class="text-lg text-center uppercase md:text-left font-bold">{{ Str::words(auth()->user()->fullname, 1) }}</p>
         <p class="text-xl font-light text-center md:text-left">telah dinyatakan </p>
       </div>
       <p class="text-lg py-2 px-4 mt-4 md:mt-0 font-bold bg-white/30 backdrop-blur-md shadow-md {{ auth()->user()->isPass === 'LULUS' ? 'shadow-green-400/50' : 'shadow-red-400/50' }} text-center md:text-left uppercase">{{ auth()->user()->isPass }}</p>
     </div>
   </div>
   @else
   <div class="col-span-12 md:col-span-4 p-4 bg-gray-400 shadow-md">
     <div class="md:flex md:flex-col md:justify-between h-full">
       <div class="flex space-x-2 justify-center md:block md:space-x-0 mb-2">
         <p class="text-lg text-center uppercase md:text-left font-bold">{{ Str::words(auth()->user()->fullname, 1) }}</p>
         <p class="text-xl font-light text-center md:text-left">telah dinyatakan </p>
       </div>
       <p class="text-sm py-2 px-4 mt-4 md:mt-0 font-bold bg-white/30 backdrop-blur-md shadow-md shadow-gray-400/50 text-center md:text-left uppercase">Maaf, anda belum melunasi administrasi</p>
     </div>
   </div>
   
   @endif
 </div>
  
</div>
@endsection