@extends('layouts.main')

@section('content')

<div class="w-full md:w-1/2 lg:w-1/3 mx-auto p-8">
    <div class="p-8 bg-sky-200 shadow-lg">

      <div>
        <p class="text-md text-sky-600 font-medium uppercase">
          Tambahkan data
        </p>
        <h1 class="text-2xl font-bold text-sky-700 uppercase">Siswa Baru</h1>
      </div>

      <div class="mt-10">
        <form action="/user/store" method="post" class="flex flex-col">
          @csrf
          <div>
            <label for="nisn" class="font-medium text-sky-600">NISN</label>
            <input type="text" placeholder="Nomor Induk Siswa Nasional" required autocomplete="off" name="nisn" id="nisn" class="text-sky-600 font-medium mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500" value="{{ old('nisn') }}">
            @error('nisn')
                <p class="mt-2 text-red-600 text-sm ">{{ $message }}</p>
            @enderror
          </div>
          
          <div class="mt-4">
            <label for="exam_num" class="font-medium text-sky-600">No. Peserta</label>
            <input type="text" placeholder="Nomor Peserta Ujian" required autocomplete="off" name="exam_num" id="exam_num" class="text-sky-600 font-medium mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500" value="{{ old('exam_num') }}">
            @error('exam_num')
                <p class="mt-2 text-red-600 text-sm ">{{ $message }}</p>
            @enderror
          </div>

          <div class="mt-4">
            <label for="fullname" class="font-medium text-sky-600">Nama Lengkap</label>
            <input type="text" placeholder="Nama Lengkap" required autocomplete="off" name="fullname" id="fullname" class="text-sky-600 font-medium mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500" value="{{ old('fullname') }}">
            @error('fullname')
                <p class="mt-2 text-red-600 text-sm ">{{ $message }}</p>
            @enderror
          </div>

          <div class="mt-4">
            <label for="birth" class="font-medium text-sky-600">Tanggal Lahir</label>
            <input type="text" placeholder="11042022" required autocomplete="off" name="birth" id="birth" class="text-sky-600 font-medium mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500" value="{{ old('birth') }}">
            @error('birth')
                <p class="mt-2 text-red-600 text-sm ">{{ $message }}</p>
            @enderror
          </div>

          <div class="mt-4">
            <label for="class" class="font-medium text-sky-600">Kelas</label>
            <input type="text" placeholder="12 RPL" required autocomplete="off" name="class" id="class" class="text-sky-600 font-medium mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500" value="{{ old('class') }}">
            @error('class')
                <p class="mt-2 text-red-600 text-sm ">{{ $message }}</p>
            @enderror
          </div>

          <div class="mt-4">
            <div class="flex space-x-2">
                <div class="flex justify-center">
                    <div class="w-full">
                        <select class="form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-sky-600
                        bg-sky-100 bg-clip-padding bg-no-repeat
                        border border-solid border-sky-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-sky-600 focus:bg-sky-100 focus:border-sky-600 focus:outline-none" name="isPass">
                            @foreach( $isPass as $pass )
                                <option value="{{ $pass }}">
                                    {{ $pass }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-full">
                        <select class="form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-sky-600
                        bg-sky-100 bg-clip-padding bg-no-repeat
                        border border-solid border-sky-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-sky-600 focus:bg-sky-100 focus:border-sky-600 focus:outline-none" name="isPaid">
                            @foreach( $isPaid as $paid )
                                <option value="{{ $paid }}">
                                    {{ $paid }}
                                </option>

                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
          </div>

          <div class="mt-16">
            <button type="submit" class="w-full px-6 py-2.5 bg-sky-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg transition duration-150 ease-in-out">Tambah Data</button>
          </div>

        </form>
      </div>

    </div>
  </div>
@endsection