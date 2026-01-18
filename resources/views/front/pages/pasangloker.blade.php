@extends('front.layout')
@section('title','Pasang Lowongan Kerja')

@section('content')

<h1 class="text-2xl font-bold mb-6 text-[#080D70]">
Pasang Lowongan Kerja
</h1>

@if(session('success'))
<div class="bg-green-100 text-green-700 p-4 rounded-xl mb-4">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="bg-red-100 text-red-600 p-4 rounded-xl">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('pasangloker.store') }}" method="POST" class="space-y-6 bg-white p-8 rounded-3xl">
@csrf

<h3 class="font-bold">Data Perusahaan</h3>

<input name="company_name" placeholder="Nama Perusahaan" class="w-full border p-3 rounded-xl">

<input name="email" placeholder="Email Perusahaan" class="w-full border p-3 rounded-xl">

<input name="phone" placeholder="Nomor WhatsApp" class="w-full border p-3 rounded-xl">

<input name="website" placeholder="Website (opsional)" class="w-full border p-3 rounded-xl">


<h3 class="font-bold mt-6">Data Lowongan</h3>

<input name="title" placeholder="Judul Lowongan" class="w-full border p-3 rounded-xl">

<textarea name="description" placeholder="Deskripsi Pekerjaan" class="w-full border p-3 rounded-xl"></textarea>

<select name="location_id" class="w-full border p-3 rounded-xl">
    <option value="">Pilih Lokasi</option>
    @foreach($locations as $loc)
    <option value="{{ $loc->id }}">{{ $loc->name }}</option>
    @endforeach
</select>

<select name="job_type_id" class="w-full border p-3 rounded-xl">
    <option value="">Tipe Pekerjaan</option>
    @foreach($types as $type)
    <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endforeach
</select>

<select name="category_id" class="w-full border p-3 rounded-xl">
    <option value="">Kategori</option>
    @foreach($categories as $cat)
    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
    @endforeach
</select>

<input name="salary_min" placeholder="Gaji Minimal" class="w-full border p-3 rounded-xl">

<input name="salary_max" placeholder="Gaji Maksimal" class="w-full border p-3 rounded-xl">

<h3 class="font-bold mt-6">Pendidikan Minimal</h3>

<div class="grid grid-cols-2 gap-2">
@foreach($educations as $edu)
<label class="flex items-center gap-2">
    <input type="checkbox" name="educations[]" value="{{ $edu->id }}">
    {{ $edu->name }}
</label>
@endforeach
</div>


<button class="bg-[#080D70] text-white px-6 py-3 rounded-xl">
Kirim Lowongan
</button>

</form>

@endsection
