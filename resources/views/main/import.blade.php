@extends('layouts.main')

@section('content')
<div class="p-4">
  <div class="container mx-auto">

    <div class="p-4 bg-green-400 text-white">
 
      <form action="/user/import/store" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="md:text-lg lg:text-2xl font-semibold">Upload File Excel</h1>
        <label for="xlsx"
          class="p-2 mt-4 border-2 border-dashed border-white
          text-sm font-light italic inline-block
          w-full cursor-pointer">Select File...</label>
        <input type="file" class="hidden" name="xlsx" id="xlsx">

        <div class="mt-4">
          <button type="submit" class="w-full px-6 py-2.5 bg-white text-green-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-500 hover:text-white hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Tambah Data</button>
        </div>
      </form>

    </div>

  </div>
</div>
@endsection