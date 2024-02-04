@extends('auth.template')
@section('content')
    <div class="loginwrapper">
        <div class="lg-inner-column">
            <div class="left-column relative z-[1]">
                <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
                    <a href="index.html">
                        <img src="{{ asset('backend/assets/images/logo/logo.svg') }}" alt="" class="mb-10 dark_logo" />
                    </a>
                    <h4>
                        Unlock your Project
                        <span class="text-slate-800 dark:text-slate-400 font-bold">
                            performance
                        </span>
                    </h4>
                </div>
                <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1]">
                    <img src="{{ asset('backend/assets/images/auth/ils1.svg') }}" alt=""
                        class="h-full w-full object-contain" />
                </div>
            </div>
            <div class="right-column relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box h-full flex flex-col justify-center">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="index.html">
                                <img src="{{ asset('backend/assets/images/logo/logo.svg') }}" alt=""
                                    class="mb-10 dark_logo" />
                            </a>
                        </div>
                        <div class="text-center 2xl:mb-10 mb-4">
                            <h4 class="font-medium">Sign in</h4>
                            <div class="text-slate-500 text-base">
                                Sign in to your account to start using Dashcode
                            </div>
                        </div>
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
                        <!-- BEGIN: Login Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="fromGroup mb-3">
                                <label class="block capitalize form-label">email</label>
                                <div class="relative">
                                    <input type="email" name="email" id="email"
                                        class="form-control py-2 @error('error') !border-danger-500 !pr-9 @enderror"
                                        placeholder="Email" />
                                </div>
                                @error('name')
                                    <span
                                        class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="fromGroup">
                                <label class="block capitalize form-label">passwrod</label>
                                <div class="relative">
                                    <input type="password" name="password" id="password"
                                        class="form-control py-2 @error('error') !border-danger-500 !pr-9 @enderror"
                                        placeholder="Password" required autocomplete="current-password" />
                                </div>
                                @error('password')
                                    <span
                                        class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-dark block w-full text-center mt-3">
                                Sign in
                            </button>
                        </form>
                        <!-- END: Login Form -->
                    </div>
                    <div class="auth-footer text-center">
                        Copyright 2021, Dashcode All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
