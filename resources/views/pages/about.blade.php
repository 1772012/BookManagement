@extends('layouts.app')

@section('content')
    <!-- Three columns of text below the carousel -->
    <div class="row m-3 p-2">
        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('assets/images/avinash.jpg') }}" alt="Generic placeholder image"
                width="140" height="140">
            <hr>
            <h2>Avinash</h2>
            <hr>
            <p>Gua tuh orangnya suka bahas agama sana sini jadi kadang kalo udah bahas itu pasti panjang lebar. Kadang suka
                jailin orang biasanya jailin si Zaldy
            </p>
        </div>

        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('assets/images/zaldy.jpg') }}" alt="Generic placeholder image"
                width="140" height="140">
            <hr>
            <h2>Zaldy Ignatius Auw</h2>
            <hr>
            <p>Gua orangnya optimis ga suka basa basi. Kadang kalo ada masalah, gua bisa langsung cari solusi tapi beda
                ceritanya kalo masalahnya pada saat ngoding wkwkwk</p>
        </div>

        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('assets/images/kafka.jpg') }}" alt="Generic placeholder image"
                width="140" height="140">
            <hr>
            <h2>Kafka Febianto Agiharta</h2>
            <hr>
            <p>Gua ga suka banyak bacot kecuali udah dibacotin sama orang baru gua mulai. Gaya hidup yang sederhana aja,
                simpel ga usah dibikin ribet sana sini</p>
        </div>
    </div>

@endsection
