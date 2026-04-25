@extends('layouts.layout')

@section('content')
<div class="max-w-5xl mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Detail User</h2>

    <div class="overflow-hidden rounded-2xl shadow-lg border border-gray-200 mt-10">
        <table class="w-full text-sm text-left">
   
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Harga</th>
                    <th class="px-6 py-3">Deskripsi</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y">
                <tr>
                    <td class="px-6 py-3">{{ $data->name_product }}</td>
                    <td class="px-6 py-3">{{ $data->harga }}</td>
                    <td class="px-6 py-3">{{ $data->deskripsi_product }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection