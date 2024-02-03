<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="registerModal" tabindex="-1" aria-labelledby="disabled_backdrop" aria-hidden="true" data-bs-backdrop="static"
    data-bs-keyboard="false">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
      rounded-md outline-none text-current">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-info-700">
                    <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                        Create User
                    </h3>
                    <button type="button"
                        class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                  dark:hover:bg-slate-600 dark:hover:text-white"
                        data-bs-dismiss="modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                          11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ url('users') }}" method="POST">
                    @csrf
                    <div class="p-6 space-y-4">
                        <div class="input-area">
                            <label for="name" class="form-label">Name</label>
                            <div class="relative">
                                <input id="name" name="name" type="text"
                                    class="form-control @error('error') !border-danger-500 !pr-9 @enderror"
                                    placeholder="Name" value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <span
                                    class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-area">
                            <label for="email" class="form-label">Email</label>
                            <div class="relative">
                                <input id="email" name="email" type="email"
                                    class="form-control @error('error') !border-danger-500 !pr-9 @enderror"
                                    placeholder="Email" value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <span
                                    class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-area">
                            <label for="password" class="form-label">Password</label>
                            <div class="relative">
                                <input id="password" name="password" type="password"
                                    class="form-control @error('error') !border-danger-500 !pr-9 @enderror"
                                    placeholder="Password">
                            </div>
                            @error('password')
                                <span
                                    class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-area">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <div class="relative">
                                <input id="password_confirmation" name="password_confirmation" type="password"
                                    class="form-control @error('error') !border-danger-500 !pr-9 @enderror"
                                    placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                            @error('password_confirmation')
                                <span
                                    class="font-Inter text-sm text-danger-500 pt-2 inline-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                        <button type="submit"
                            class="btn inline-flex justify-center text-white bg-info-700">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
