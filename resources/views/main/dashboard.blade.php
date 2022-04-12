@extends("layouts.main")

@section("content")
<div class="p-4">
  <h1>Anda Sudah Login : </h1>
  <div class="mt-4">
    <h1 class="text-lg font-semibold">{{ auth()->user()->username }}</h1>
  </div>
  <form action="/admin/logout" method="post">
    @csrf
    <div class="mt-4">
      <button type="submit" class="inline-block px-6 
      py-2.5 bg-blue-600 text-white font-medium 
      text-xs leading-tight uppercase rounded 
      shadow-md 
      hover:bg-blue-700 hover:shadow-lg 
      focus:bg-blue-700 focus:shadow-lg 
      focus:outline-none focus:ring-0 
      active:bg-blue-800 active:shadow-lg 
      transition 
      duration-150 ease-in-out">Logout</button>
    </div>
  </form>
  
</div>
@endsection