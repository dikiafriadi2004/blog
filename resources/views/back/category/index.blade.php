@extends('back.layout.template')

@section('title', 'Categories List - Admin')

@section('content')
    <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
        <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
                <div id="content_layout">

                    <!-- BEGIN: Breadcrumb -->
                    <div class="mb-5">
                        <ul class="m-0 p-0 list-none">
                            <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                <a href="{{ url('categories') }}">
                                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                    <iconify-icon icon="heroicons-outline:chevron-right"
                                        class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                </a>
                            </li>
                            <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                                Categories
                                <iconify-icon icon="heroicons-outline:chevron-right"
                                    class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                            </li>
                            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                Categories List</li>
                        </ul>
                    </div>
                    <!-- END: BreadCrumb -->


                    <div class=" space-y-5">
                        <div class="card">
                            <header class=" card-header noborder">
                                <h4 class="card-title">Categories List
                                </h4>
                                <button class="btn inline-flex justify-center btn-success rounded-[50px]"
                                    data-bs-toggle="modal" data-bs-target="#categoryModal">
                                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                        icon="heroicons:plus-small"></iconify-icon>
                                    Create
                                </button>
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
                            <div class="card-body px-6 pb-6">
                                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                                    <span class=" col-span-8  hidden"></span>
                                    <span class="  col-span-4 hidden"></span>
                                    <div class="inline-block min-w-full align-middle">
                                        <div class="overflow-hidden ">
                                            <table
                                                class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                                id="data-table">
                                                <thead class=" border-t border-slate-100 dark:border-slate-800">
                                                    <tr>

                                                        <th scope="col" class=" table-th ">
                                                            No
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Name
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Slug
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Created At
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Action
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody
                                                    class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                                    @foreach ($categories as $item)
                                                        <tr>
                                                            <td class="table-td">{{ $loop->iteration }}</td>
                                                            <td class="table-td">{{ $item->name }}</td>
                                                            <td>{{ $item->slug }}</td>
                                                            <td class="table-td">{{ $item->created_at }}</td>
                                                            <td class="table-td ">
                                                                <div>
                                                                    <div class="relative">
                                                                        <div class="dropdown relative">
                                                                            <button class="text-xl text-center block w-full"
                                                                                type="button" id="tableDropdownMenuButton1"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <iconify-icon
                                                                                    icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                                            </button>
                                                                            <ul
                                                                                class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">

                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#categoryUpdateModal{{ $item->id }}">
                                                                                        Edit
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"
                                                                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#categoryDeleteModal{{ $item->id }}">
                                                                                        Delete
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    @include('back.category.create-modal')
    @include('back.category.update-modal')
    @include('back.category.delete-modal')
@endsection
