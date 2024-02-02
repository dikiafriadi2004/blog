@extends('back.layout.template')

@section('title', 'Create Article - Admin')

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
                                Update Article</li>
                        </ul>
                    </div>
                    <!-- END: BreadCrumb -->
                    <div class="space-y-5 profile-page">
                        </header>
                        @if ($errors->any())
                            <div
                                class="py-[18px] px-6 font-normal font-Inter text-sm rounded-md bg-danger-500 text-white dark:bg-danger-500 dark:text-slate-300">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (session('success'))
                            <div
                                class="py-[18px] px-6 font-normal font-Inter text-sm rounded-md bg-info-700 text-white dark:bg-info-700 dark:text-slate-300">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1">
                                        {{ session('success') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form action="{{ url('article/'.$article->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <input type="hidden" name="oldImg" value="{{ $article->img }}">

                            <div class="grid grid-cols-12 gap-6">
                                <div class="lg:col-span-8 col-span-12">
                                    <div class="card">
                                        <header class="card-header">
                                            <h4 class="card-title">Update Article</h4>
                                        </header>
                                        <div class="card-body flex flex-col p-6">
                                            <div class="card-text h-full ">
                                                <div class="input-area relative">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" name="title" id="title" class="form-control"
                                                        placeholder="Title" value="{{ old('title', $article->title) }}">
                                                </div>
                                                <div class="input-area relative mt-2">
                                                    <label for="desc" class="form-label">Description</label>
                                                    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">{{ old('desc', $article->desc) }}</textarea>
                                                </div>
                                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-7">
                                                    <div class="input-area relative mt-2">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select id="status" name="status" class="form-control">
                                                            <option value="1" {{ $article->status == 1 ? 'selected' : null }}>Publish</option>
                                                            <option value="0" {{ $article->status == 0 ? 'selected' : null }}>Private</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-area relative mt-2">
                                                        <label for="publish_date" class=" form-label">Publish Date</label>
                                                        <input class="form-control py-2 flatpickr flatpickr-input active"
                                                            name="publish_date" id="publish_date" type="date" value="{{ $article->publish_date }}">
                                                        {{-- <input class="form-control py-2 flatpickr flatpickr-input"
                                                            name="publish_date" id="publish_date" type="date" value="{{ $article->publish_date }}"> --}}
                                                    </div>
                                                </div>
                                                <div class="float-right mt-2">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-4 col-span-12">
                                    <div class="card mb-2">
                                        <header class="card-header">
                                            <h4 class="card-title">Categories</h4>
                                        </header>
                                        <div class="card-body p-6">
                                            <div class="input-area relative">
                                                <select id="category_id" name="category_id" class="form-control">
                                                    @foreach ($categories as $item)
                                                        @if ($item->id == $article->category_id)
                                                            <option value="{{ $item->id }}" class="dark:bg-slate-700"
                                                                selected>
                                                                {{ $item->name }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}" class="dark:bg-slate-700">
                                                                {{ $item->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-10">
                                        <header class="card-header">
                                            <h4 class="card-title">Thumbnail</h4>
                                        </header>
                                        <div class="card-body p-6">
                                            <div class="input-area">
                                                <label for="img" class="form-label">Thumbnail (Max 2Mb)</label>
                                                <input type="file" name="img" id="img" class="form-control">
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/backend/'.$article->img) }}" alt="" width="150px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
