@extends('layouts.app')
@section('content')
    <style></style>
    <div class="card bordered shadow-lg mx-auto w-full">
        <div class="card-body">
            <div class="card-title"><h1 class="text-2xl text-center underline">Fokus kepada yang anda bagikan</h1>
            </div>
            <p class="text-center">Login menggunakan <abbr
                    title="KataKunci adalah Kata yang digunakan untuk masuk kedalam Aplikasi ini">KataKunci</abbr></p>
            <div class="form-control py-4">
                <input type="text" placeholder="KataKunci" class="input input-primary input-bordered">
            </div>
            <div class="flex card-actions">
                <button class="btn btn-primary mx-auto">Masuk</button>
            </div>
            <p class="text-center pt-10">Belum memiliki KataKunci? Buat <a class="underline" href="{{url('/signup')}}">Disini</a></p>
        </div>
    </div>
@endsection
