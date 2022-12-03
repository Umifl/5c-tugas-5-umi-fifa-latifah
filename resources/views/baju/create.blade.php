@extends('layouts.navbar')

<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8">
            <h2>Data Pakaian</h2>
            <hr>
            <p>Silahkan masukkan data pakaian dengan lengkap!</p>
               @if (session()->has('message'))
            <div class="my-3">
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            </div>
               @endif

                <form action="{{route('baju.store')}}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" name="kode" id="kode" placeholder="ex: MT100" class="form-control" value="{{old('kode')}}">
                    @error('kode')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="ex: Kaos" class="form-control" value="{{old('nama')}}">
                        @error('nama')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name="brand" id="brand" class="form-select">
                        <option value="Bloods" {{ old('brand') == "Bloods" ? "selected" : "" }}>Bloods</option>
                        <option value="Leaf" {{ old('brand') == "Leaf" ? "selected" : "" }}>Leaf</option>
                        <option value="Levis" {{ old('brand') == "Levis" ? "selected" : "" }}>Levis</option>
                    </select>
                    <label for="brand">Brand</label>
                    @error('brand')
                        <div class="text-denger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name="ukuran" id="ukuran" class="form-select">
                        <option value="S" >S</option>
                        <option value="L" >L</option>
                        <option value="XL" >XL</option>
                    </select>
                    <label for="brand">Ukuran</label>
                    @error('ukuran')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-text">Rp.</span>
                    <div class="form-floating">
                    <input type="text" name="harga" id="harga"  class="form-control"
                    value="{{ old('harga') }}">
                    <label for="harga">Harga</label>
                    @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                    <button type="submit" class="btn btn-danger col-md-2">Tambah</button>
                        <p></p>
                </form>
        </div>
    </div>
</div>
