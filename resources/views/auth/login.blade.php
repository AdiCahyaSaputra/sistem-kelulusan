@extends("layouts.main")

@section("content")
<div class="bg-sky-500 w-full h-screen">
  <div class="w-full md:w-1/2 lg:w-1/3 mx-auto p-8">
    <div class="p-8 bg-sky-200 shadow-lg">

      <div>
        <p class="text-md text-sky-600 font-medium uppercase">
          Siswa
        </p>
        <h1 class="text-2xl font-bold text-sky-700 uppercase">Silahkan Login</h1>
      </div>

      <div class="mt-10">
        <form action="/login" method="post" class="flex flex-col">
          @csrf
          <div>
            <label for="nisn" class="font-medium text-sky-600">NISN</label>
            <input type="text" placeholder="Nomor Induk Siswa Nasional" required autocomplete="off" name="nisn" id="nisn" class="text-sky-600 mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500">
          </div>
          <div class="mt-4">
            <label for="password" class="font-medium text-sky-600">PASSWORD</label>
            <input type="password" name="password" placeholder="Tanggal Lahir" id="password" class="text-sky-600 mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500">
          </div>
          
          <div class="mt-4">
            <p class="text-sm text-sky-600">Password menggunakan tanggal lahir dengan format <code class="font-mono text-sky-700 font-bold">ddmmyy</code> atau <code class="font-mono text-sky-700 font-bold">11042005</code></p>
          </div>
          
          <div class="mt-16">
            <button type="submit" class="w-full px-6 py-2.5 bg-sky-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg transition duration-150 ease-in-out">Login</button>
          </div>

        </form>
      </div>

    </div>
  </div>
  <div class="text-center">
    <a href="/admin/login" class="text-normal group mt-4 font-medium text-white">Login sebagai <span class="font-bold group-hover:underline">Admin</span> ?</a>
  </div>
</div>
@endsection