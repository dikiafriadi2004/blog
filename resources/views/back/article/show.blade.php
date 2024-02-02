@extends('back.layout.template')

@section('title', 'Detail Article - Admin')

@section('content')
    <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
        <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
                <div id="content_layout">

                    <!-- BEGIN: Breadcrumb -->
                    <div class="mb-5">
                        <ul class="m-0 p-0 list-none">
                            <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                <a href="{{ url('article') }}">
                                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                    <iconify-icon icon="heroicons-outline:chevron-right"
                                        class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                </a>
                            </li>
                            <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                                Article
                                <iconify-icon icon="heroicons-outline:chevron-right"
                                    class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                            </li>
                            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                Detai Article</li>
                        </ul>
                    </div>
                    <!-- END: BreadCrumb -->
                    <div class="lg:flex flex-wrap blog-posts lg:space-x-5 space-y-5 lg:space-y-0 rtl:space-x-reverse">
                        <div class="flex-1">
                            <div class="grid grid-cols-1 gap-5">
                                <div class="card p-6">
                                    <div class="h-[248px] w-full mb-6">
                                        <a href="{{ asset('storage/backend/'.$article->img) }}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset('storage/backend/'.$article->img) }}" alt=""
                                            class=" w-full h-full object-cover">
                                        </a>
                                    </div>
                                    <div class="flex justify-between mb-4">
                                        <a href="#"
                                            class="inline-flex leading-5 text-slate-500 dark:text-slate-500 text-sm font-normal">
                                            <span>
                                                <iconify-icon icon="heroicons-outline:calendar"
                                                    class="text-slate-400 dark:text-slate-500 ltr:mr-2 rtl:ml-2 text-lg"></iconify-icon>
                                            </span>
                                            <span> {{ $article->publish_date }}</span>
                                        </a>
                                        <div class="flex space-x-4 rtl:space-x-reverse">
                                            <span>
                                                {{ $article->views }} 
                                                <iconify-icon icon="heroicons:eye-16-solid"></iconify-icon>
                                            </span>
                                            @if ($article->status == 1)
                                            <span class="badge bg-success-500 text-white capitalize pill">
                                                Published
                                            </span>
                                            @else
                                            <span class="badge bg-danger-500 text-white capitalize pill">
                                                Private
                                            </span>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <h5 class="card-title text-slate-900">
                                        <a href="#">{{ $article->title }}</a>
                                    </h5>
                                    <div
                                        class="card-text dark:text-slate-300 mt-4 space-y-4 leading-5 text-slate-600 text-sm border-b border-slate-100 dark:border-slate-700 pb-6">
                                        <p>
                                            {!! $article->desc !!}
                                        </p>
                                    </div>
                                    <div class="mt-6">
                                        <ul
                                            class="lg:flex items-center lg:space-x-3 lg:rtl:space-x-reverse mt-4 border-b border-slate-100 dark:border-slate-700 pb-6">
                                            <li class="dark:text-slate-300">Category :</li>

                                            <li>
                                                <a href="#"
                                                    class="text-xs font-normal text-slate-600 dark:text-slate-300 bg-slate-100 dark:bg-slate-600 py-1 px-3 rounded-full hover:bg-slate-900 hover:text-white transition duration-150">
                                                    <span>{{ $article->Category->name }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
