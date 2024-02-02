@extends('back.layout.template')

@section('title', 'Dashboard - Admin')

@section('content')
    <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
        <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
                <div id="content_layout">
                    <div>
                        <div class="grid grid-cols-12 gap-5 mb-5">
                            <div class="2xl:col-span-12 lg:col-span-12 col-span-12">
                                <div class="p-4 card">
                                    <div class="grid md:grid-cols-4 col-span-1 gap-4">
                                        <!-- BEGIN: Group Chart2 -->
                                        <div class="py-[18px] px-4 rounded-[6px] bg-[#E5F9FF] dark:bg-slate-900	 ">
                                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                <div class="flex-1">
                                                    <div
                                                        class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                        Total Articles
                                                    </div>
                                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                                        {{ $total_articles }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="py-[18px] px-4 rounded-[6px] bg-[#E5F9FF] dark:bg-slate-900	 ">
                                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                <div class="flex-1">
                                                    <div
                                                        class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                        Total Categories
                                                    </div>
                                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                                        {{ $total_categories }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="py-[18px] px-4 rounded-[6px] bg-[#FFEDE5] dark:bg-slate-900	 ">
                                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                <div class="flex-none">
                                                    <div id="wline2"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div
                                                        class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                        Products sold
                                                    </div>
                                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                                        564
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="py-[18px] px-4 rounded-[6px] bg-[#EAE5FF] dark:bg-slate-900	 ">
                                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                <div class="flex-none">
                                                    <div id="wline3"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div
                                                        class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                        Growth
                                                    </div>
                                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                                        +5.0%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- END: Group Chart2 -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid xl:grid-cols-2 grid-cols-1 gap-5">
                            <!-- BEGIN: Basic Table -->
                            <div class="card">
                                <header class=" card-header noborder">
                                    <h4 class="card-title">Latest Article
                                    </h4>
                                </header>
                                <div class="card-body px-6 pb-6">
                                    <div class="overflow-x-auto -mx-6">
                                        <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden ">
                                                <table
                                                    class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                                        <tr>

                                                            <th scope="col" class=" table-th ">
                                                                No
                                                            </th>

                                                            <th scope="col" class=" table-th ">
                                                                Title
                                                            </th>

                                                            <th scope="col" class=" table-th ">
                                                                Category
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

                                                        @foreach ($latest_article as $item)
                                                            <tr>
                                                                <td class="table-td">{{ $loop->iteration }}</td>
                                                                <td class="table-td">{{ $item->title }}</td>
                                                                <td class="table-td">{{ $item->Category->name }}</td>
                                                                <td class="table-td">{{ $item->created_at }}</td>
                                                                <td>
                                                                    <a href="{{ url('article/' . $item->id) }}"
                                                                        class="btn btn-sm btn-secondary">Detail</a>
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
                            <!-- END: Basic Table -->
          
                            <!-- BEGIN: Table Header -->
                            <div class="card">
                                <header class=" card-header noborder">
                                    <h4 class="card-title">Popular Article
                                    </h4>
                                </header>
                                <div class="card-body px-6 pb-6">
                                    <div class="overflow-x-auto -mx-6">
                                        <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden ">
                                                <table
                                                    class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                                        <tr>

                                                            <th scope="col" class=" table-th ">
                                                                No
                                                            </th>

                                                            <th scope="col" class=" table-th ">
                                                                Title
                                                            </th>

                                                            <th scope="col" class=" table-th ">
                                                                Category
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

                                                        @foreach ($popular_article as $item)
                                                            <tr>
                                                                <td class="table-td">{{ $loop->iteration }}</td>
                                                                <td class="table-td">{{ $item->title }}</td>
                                                                <td class="table-td">{{ $item->Category->name }}</td>
                                                                <td class="table-td">{{ $item->created_at }}</td>
                                                                <td>
                                                                    <a href="{{ url('article/' . $item->id) }}"
                                                                        class="btn btn-sm btn-secondary">Detail</a>
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
                            <!-- END: Table Header -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
