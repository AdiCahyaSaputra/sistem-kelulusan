@extends("layouts.main")

@section("content")
<div class="p-4">

  <div class="container mx-auto">
    <!-- Heading -->
    <div class="md:flex md:justify-between md:items-center my-4">
      <h1 class="text-lg md:text-3xl font-bold mb-2 md:mb-0">Semua Data Siswa</h1>
      <div class="">
        <div class="xl:w-96">
          <form action="" method="get">
            <div class="input-group relative flex flex-wrap items-stretch w-full">
              <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-sky-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
            </div>
            
          </form>
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
                      <a href="" class="p-2 rounded-sm bg-red-400 text-white">Hapus</a>
                      <a href="" class="p-2 rounded-sm bg-amber-400 text-white">Edit</a>
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