@extends('auth.template')

@section('content')
    <div class="loginwrapper">
        <div class="lg-inner-column">
            <div class="left-column relative z-[1]">
                <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
                    <a href="index.html">
                        <img src="{{ asset('backend/assets/images/logo/logo.svg') }}" alt="" class="mb-10 dark_logo">
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
                        class=" h-full w-full object-contain">
                </div>
            </div>
            <div class="right-column  relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box h-full flex flex-col justify-center">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="index.html">
                                <img src="{{ asset('backend/assets/images/logo/logo.svg') }}" alt=""
                                    class="mb-10 dark_logo">
                            </a>
                        </div>
                        <div class="text-center 2xl:mb-10 mb-4">
                            <h4 class="font-medium">Sign in</h4>
                            <div class="text-slate-500 text-base">
                                Sign in to your account to start using Dashcode
                            </div>
                        </div>

                        <!-- BEGIN: Registration Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="fromGroup mb-3">
                                <label class="block capitalize form-label">Name</label>
                                <div class="relative ">
                                    <input type="text" name="name" id="name" class="form-control py-2 @error('error') !border-danger-500 !pr-9 @enderror"
                                        placeholder="Enter your name">
                                </div>
                                @error('name')
                                    <span
                                        class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="fromGroup mb-3">
                                <label class="block capitalize form-label">Email</label>
                                <div class="relative ">
                                    <input type="email" name="email" id="email" class="form-control py-2 @error('error') !border-danger-500 !pr-9 @enderror"
                                        placeholder="Enter your email">
                                </div>
                                @error('email')
                                    <span
                                        class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="fromGroup mb-3">
                                <label class="block capitalize form-label">Passwrod</label>
                                <div class="relative ">
                                    <input type="password" name="password" id="password" class="form-control py-2 @error('error') !border-danger-500 !pr-9 @enderror"
                                        placeholder="Enter your password">
                                </div>
                                @error('password')
                                    <span
                                        class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="fromGroup mb-3">
                                <label class="block capitalize form-label">Confirm Passwrod</label>
                                <div class="relative ">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control py-2 @error('error') !border-danger-500 !pr-9 @enderror" placeholder="Enter Confirm password">
                                </div>
                                @error('password_confirmation')
                                    <span
                                        class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-dark block w-full text-center">Create an account</button>
                        </form>
                        <!-- END: Registration Form -->
                    </div>
                    <div class="auth-footer text-center">
                        Copyright 2021, Dashcode All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
