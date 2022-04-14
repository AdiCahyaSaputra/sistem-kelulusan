@extends('layouts.main')

@section('content')

<div class="w-full md:w-1/2 lg:w-1/3 mx-auto p-8">
    <div class="p-8 bg-sky-200 shadow-lg">

      <div>
        <p class="text-md text-sky-600 font-medium uppercase">
          EDIT Berdasarkan
        </p>
        <h1 class="text-2xl font-bold text-sky-700 uppercase">Nisn : {{ $user->nisn }}</h1>
      </div>

      <div class="mt-10">
        <form action="/user/update/{{ $user->nisn }}" method="post" class="flex flex-col">
          @csrf
          <div>
            <label for="nisn" class="font-medium text-sky-600">NISN</label>
            <input type="text" placeholder="Nomor Induk Siswa Nasional" required autocomplete="off" name="nisn" id="nisn" class="text-sky-600 font-medium mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500" value="{{ $user->nisn }}">
          </div>
          
          <div class="mt-4">
            <label for="exam_num" class="font-medium text-sky-600">No. Peserta</label>
            <input type="text" placeholder="Nomor Peserta Ujian" required autocomplete="off" name="exam_num" id="exam_num" class="text-sky-600 font-medium mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500" value="{{ $user->exam_num }}">
          </div>

          <div class="mt-4">
            <label for="fullname" class="font-medium text-sky-600">Nama Lengkap</label>
            <input type="text" required autocomplete="off" name="fullname" id="fullname" class="text-sky-600 font-medium mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500" value="{{ $user->fullname }}">
          </div>

          <div class="mt-4">
            <label for="class" class="font-medium text-sky-600">Kelas</label>
            <input type="text" required autocomplete="off" name="class" id="class" class="text-sky-600 font-medium mt-2 w-full py-1 px-2 bg-sky-100 outline-none shadow-sm focus:border-l-4 focus:border-sky-500" value="{{ $user->class }}">
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
                                @if( $user->isPass === $pass )
                                <option value="{{ $pass }}" selected>
                                    {{ $pass }}
                                </option>
                                @else
                                <option value="{{ $pass }}">
                                    {{ $pass }}
                                </option>
                                @endif
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
                                @if( $user->ispaid === $paid )
                                <option value="{{ $paid }}" selected>
                                    {{ $paid }}
                                </option>
                                @else
                                <option value="{{ $paid }}">
                                    {{ $paid }}
                                </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
          </div>

          <div class="mt-16">
            <button type="submit" class="w-full px-6 py-2.5 bg-sky-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg transition duration-150 ease-in-out">Update</button>
          </div>

        </form>
      </div>

    </div>
  </div>
@endsection