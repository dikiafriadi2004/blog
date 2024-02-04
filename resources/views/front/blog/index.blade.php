@extends('front.layout.template')

@section('title', 'Blog')

@section('content')
    <section>
        <div class="container mt-150">
            <div class="row col-lg-12 mb-30">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h3 class="medium-header mb-30">
                            BLOG
                        </h3>
                    </div>
                </div>
                @foreach ($articles as $item)
                <div class="col-lg-4 mb-30">
                    <div class="card">
                        <img src="{{ asset('storage/backend/'.$item->img) }}" class="img-blog"
                            alt="{{ $item->title }}">
                        <div class="card-body">
                            <a href="{{ $item->slug }}" class="card-title-blog">{{ $item->title }}</a>
                            <p class="card-text-blog">
                                {{ Str::limit(strip_tags($item->desc), 200, '...') }}
                            </p>
                            <span class="date-blog">{{ $item->created_at->format('d-m-y') }}</h3>
                        </div>
                    </div>
                </div>  
                @endforeach
                {{ $articles->links() }}
                
            </div>

    </section>
@endsection
