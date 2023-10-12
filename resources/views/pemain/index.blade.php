@extends('layouts.footer_n_main')

@section('title', 'Pemain')

@section('content')
    <h1 class="px-16 mt-8 mb-8 text-bold font-weight-bold text-[30px] text-blue-500">Pemain</h1>

    
    <div class="card p-8">
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">No</th>
                        <th class="px-6 py-3 text-left">ID</th>
                        <th class="px-6 py-3 text-left">Nama</th>
                        <th class="px-6 py-3 text-left">No Punggung</th>
                        <th class="px-6 py-3 text-left">Posisi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 0;
                    @endphp
                    @foreach ($pemain as $item)
                        <tr class="bg-white text-blue-500 border-b">
                            <td class="px-6 py-3">{{ ++$no }}</td>
                            <td class="px-6 py-3">{{ $item->id }}</td>
                            <td class="px-6 py-3">{{ $item->nama_pemain }}</td>
                            <td class="px-6 py-3">{{ $item->no_punggung }}</td>
                            <td class="px-6 py-3">{{ $item->posisi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
