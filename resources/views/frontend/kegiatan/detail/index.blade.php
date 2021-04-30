@extends('frontend.base.index')

@section('title')
<title>{{ $item->judul }} | Yayasan KAHMI Cita</title>
@endsection

@section('content')
    <!-- Start Service -->
    <section class="service-wrapper py-3">
        <div class="container-fluid pb-3">
            <div class="row mt-4">
                <div class="service-header col-2 col-lg-3 text-end light-300">
                    <i class='bx bx-moon h3 mt-1'></i>
                </div>
                <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                    <h2 class="h3 pb-4 typo-space-line">{{ $item->judul }}</h2>
                </div>
            </div>

            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <img src="{{ $item->url->image }}" class="img-thumbnail" style="object-fit: cover; width: 500px; heigt: 500px;" alt="Responsive image">
                    </div>
                </div>
            </div>

            <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
                {{ $item->deskripsi }}
            </p>
            
        </div>

    </section>
    <!-- End Service -->
@endsection