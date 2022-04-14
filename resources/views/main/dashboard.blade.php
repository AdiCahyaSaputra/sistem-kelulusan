@extends("layouts.main")

@section("content")
<div class="p-4">

  <div class="container mx-auto">
    @if(session('destroy'))
    <div class="py-2 px-4 w-max bg-red-400">
      <h1 class="text-sm md:text-lg font-semibold text-white">{{ session('destroy') }}</h1>
    </div>
    @endif
    @if(session('update'))
    <div class="py-2 px-4 w-max bg-sky-400">
      <h1 class="text-sm md:text-lg font-semibold text-white">{{ session('update') }}</h1>
    </div>
    @endif
    <!-- Heading -->
    <div class="md:flex md:justify-between md:items-center my-4">
      <div class=" mb-2 md:mb-0">
        <h1 class="text-lg md:text-3xl font-bold">Semua Data Siswa</h1>
        <p class="text-sm md:text-lg text-gray-400">Sekolah Pangeran Wijaya Kusuma</p>
      </div>
      <div class="">
        <div class="xl:w-96">
          <form action="" method="get">
            <div class="input-group relative flex flex-wrap items-stretch w-full">
              <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-sky-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
            </div>           
          </form>

          
          <div class="flex space-x-2">
            <a href="/user/create" class="w-1/2 py-2 px-4 mt-2 text-center rounded-sm bg-green-400 hover:bg-green-500 text-white">Tambah Siswa</a>
            <form action="/user/destroy/all" method="post">
                @csrf
                <button type="submit" class="py-2 px-4 mt-2 rounded-sm bg-red-400 w-full hover:bg-red-500 text-white">Hapus Semua</button>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end heading -->
    <!-- Table -->
    <div class="flex flex-col">
      <div class="overflow-x-auto no-scrollbar sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-4 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="bg-sky-400 text-white border-b">
                <tr>
                  <th scope="col" class="text-sm font-semibold px-4 py-2 text-left">
                    #
                  </th>
                  <th scope="col" class="text-sm font-semibold px-4 py-2 text-left">
                    NISN
                  </th>
                  <th scope="col" class="text-sm font-semibold px-4 py-2 text-left">
                    No. Peserta
                  </th>
                  <th scope="col" class="text-sm font-semibold px-4 py-2 text-left">
                    Nama Lengkap
                  </th>
                  <th scope="col" class="text-sm font-semibold px-4 py-2 text-left">
                    Kelas
                  </th>
                  <th scope="col" class="text-sm font-semibold px-4 py-2 text-left">
                    Status Lulus
                  </th>
                  <th scope="col" class="text-sm font-semibold px-4 py-2 text-left">
                    Keterangan
                  </th>
                  <th scope="col" class="text-sm font-semibold px-4 py-2 text-left">
                    Setting
                  </th>
                </tr>
              </thead>
              <tbody>

                @foreach( $users as $user )
                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $user->nisn }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $user->exam_num }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $user->fullname }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $user->class }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $user->isPass }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $user->isPaid }}
                    </td>
                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
                      <form action="/user/delete/{{ $user->nisn }}" method="post">
                        @csrf
                        <button type="submit" class="py-2 px-4 rounded-sm bg-red-400 block w-full hover:bg-red-500 text-white">Hapus</button>
                      </form>
                      <a href="/user/edit/{{ $user->nisn }}" class="py-2 px-4 block mt-2 text-center rounded-sm bg-sky-400 hover:bg-sky-500 text-white">Edit</a>
                    </td>
                  </tr>
                @endforeach
  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- end Table -->

  </div>
</div>
@endsection