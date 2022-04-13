@extends("layouts.main")

@section("content")
<div class="bg-amber-500 w-full h-screen">
  <div class="w-full md:w-1/2 mx-auto p-8">
    <div class="p-8 bg-amber-200 shadow-lg">

      <div>
        <p class="text-md text-amber-600 font-medium uppercase">
          Admin
        </p>
        <h1 class="text-2xl font-bold text-amber-700 uppercase">Silahkan Login</h1>
      </div>

      <div class="mt-10">
        <form action="/admin" method="post" class="flex flex-col">
          @csrf
          <div>
            <label for="username" class="font-medium text-amber-600">USERNAME</label>
            <input type="text" name="username" id="username" class="text-amber-600 font-medium mt-2 w-full py-1 px-2 bg-amber-100 outline-none shadow-sm focus:border-l-4 focus:border-amber-500">
          </div>
          <div class="mt-4">
            <label for="password" class="font-medium text-amber-600">PASSWORD</label>
            <input type="password" name="password" id="password" class="text-amber-600 font-medium mt-2 w-full py-1 px-2 bg-amber-100 outline-none shadow-sm focus:border-l-4 focus:border-amber-500">
          </div>
          
          <div class="mt-16">
            <button type="submit" class="w-full px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-amber-700 hover:shadow-lg focus:bg-amber-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-amber-800 active:shadow-lg transition duration-150 ease-in-out">Login</button>
          </div>

        </form>
      </div>

    </div>
  </div>
  <div class="text-center">
    <a href="/siswa/login" class="text-normal group mt-4 font-medium text-white">Login sebagai <span class="font-bold group-hover:underline">Siswa</span> ?</a>
  </div>
</div>
@endsection