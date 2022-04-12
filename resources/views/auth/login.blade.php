@extends("layouts.main")

@section("content")
<div class="bg-amber-500 w-full h-screen">
  <div class="container mx-auto p-8">
    <div class="p-8 bg-amber-200 shadow-lg">

      <div>
        <p class="text-md text-amber-600 font-medium uppercase">
          Siswa
        </p>
        <h1 class="text-2xl font-bold text-amber-700 uppercase">Silahkan Login</h1>
      </div>

      <div class="mt-10">
        <form action="/login" method="post" class="flex flex-col">
          @csrf
          <div>
            <label for="nisn" class="font-medium text-amber-600">NISN</label>
            <input type="text" name="nisn" id="nisn" class="mt-2 w-full p-1 bg-amber-100 outline-none shadow-sm focus:border-l-4 focus:border-amber-500">
          </div>
          <div class="mt-4">
            <label for="password" class="font-medium text-amber-600">PASSWORD</label>
            <input type="password" name="password" id="password" class="mt-2 w-full p-1 bg-amber-100 outline-none shadow-sm focus:border-l-4 focus:border-amber-500">
          </div>
          
          <div class="mt-4">
            <p class="text-sm text-amber-600">Password menggunakan tanggal lahir dengan format <code class="font-mono text-amber-700 font-bold">ddmmyy</code> atau <code class="font-mono text-amber-700 font-bold">1162005</code></p>
          </div>
          
          <div class="mt-16">
            <button type="submit" class="w-full px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-amber-700 hover:shadow-lg focus:bg-amber-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-amber-800 active:shadow-lg transition duration-150 ease-in-out">Login</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
@endsection