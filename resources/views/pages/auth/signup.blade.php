@extends('layouts.app')
@section('content')
    <div class="card bordered shadow-lg mx-auto w-full">
        <div class="card-body">
            <div class="card-title"><h1 class="text-2xl text-center">Hai! Ini <abbr
                        title="KataKunci adalah Kata yang digunakan untuk masuk kedalam Aplikasi ini">KataKunci</abbr> baru anda</h1>
            </div>
            <p class="text-xl text-center">Simpan <abbr
                    title="KataKunci adalah Kata yang digunakan untuk masuk kedalam Aplikasi ini">KataKunci</abbr> anda disuatu tempat. <abbr
                    title="KataKunci adalah Kata yang digunakan untuk masuk kedalam Aplikasi ini">KataKunci</abbr> jalan satu-satunya untuk anda masuk :)</p>
            <div class="form-control py-4">
                <textarea readonly class="input input-primary input-bordered">asdasdas</textarea>
            </div>
            <div class="flex card-actions">
                <button class="btn btn-primary mx-auto">Lihat ke DindingGlobal</button>
            </div>
            <p class="text-center pt-10">Apa itu <abbr
                    title="DindingGlobal adalah sebuah Dinding dimana semua orang bisa post apapun dan dilihat oleh semua orang :)">DindingGlobal</abbr>?</p>
        </div>
    </div>
@endsection
