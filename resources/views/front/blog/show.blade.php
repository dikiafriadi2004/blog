@extends('front.layout.template')

@section('content')
    <section>
        <div class="container mt-150">
            <div class="row col-lg-12 mb-30">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
                <!-- Article -->
                <div class="col-lg-8 mb-30">
                    <h3 class="medium-header mb-20">
                        {{ $article->title }}
                    </h3>
                    <img src="/assets/images/images1.png" class="img-fluid mb-10" alt="">
                    <p class="primary-copy">
                        {!! $article->desc !!}
                    </p>

                    <!-- Share Sosmed -->
                    <div class="mt-30">
                        <h3 class="share-artikel mb-10">
                            Bagikan Artikel :
                        </h3>
                        <div class="icon-share">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-paper-plane"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Recent Post -->
                <div class="col-lg-4">
                    <h3 class="small-header">Postingan Terbaru</h3>
                    <hr>
                    <div class="postingan-terbaru">
                        <div class="row">
                            @foreach ($articles as $item)
                                <div class="row col-lg-12 mb-30">
                                    <div class="post-terbaru">
                                        <div class="col-lg-3">
                                            <img src="{{ asset('storage/backend/'.$item->img) }}" class="img-artikel-terbaru" alt="{{ $item->title }}">
                                            <div class="date-artikel">
                                                <span class="date-artikel">{{ $item->created_at->format('d-m') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 ml-90 mb-10">
                                            <a href="{{ url('blog/'.$item->slug) }}" class="artikel">
                                                {{ $item->title }}
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
