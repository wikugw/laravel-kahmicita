@extends('frontend.base.index')

@section('title')
<title>{{ $item->judul }} | Yayasan KAHMI Cita</title>
@endsection

@section('content')
    <!-- Start Service -->
    <section class="service-wrapper py-3">
        <div class="container-fluid pb-3">
            <div class="row pt-5 mb-3">
                <div class="worksingle-content col-lg-8 m-auto text-left justify-content-center">
                    <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line">{{ $item->judul }}</h2>
                </div>
            </div><!-- End Blog Cover -->

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="templatemo-slide-link-target" class="card mb-3">
                        <img class="img-fluid border rounded" src="{{ $item->url->image }}" alt="Card image cap">
                    </div>
                    
                </div>
            </div><!-- End Slider -->

            <div class="row">
                <div class="col-md-8 m-auto text-left justify-content-center">
                    <p class="pt-3 text-muted light-300">
                        {{ $item->deskripsi }}
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- End Service -->
@endsection