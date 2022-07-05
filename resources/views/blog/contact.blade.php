@extends('layouts.base')

@section('title', 'Contacto')

@section('content')
    <div class="container">
        <div class="card mx-auto text-dark p-4 my-5" style="max-width: 50rem">
            <h1>@lang('messages.contact-item-1')</h1>
            <form action="{{ route('store.contact') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <label class="label-form mb-1" for="">@lang('messages.contact-item-2')</label>
                        <input class="form-control mb-3" type="text" name="name" id="" placeholder="@lang('messages.contact-item-2')">
                    </div>
                    <div class="col">
                        <label class="label-form mb-1" for="">Email</label>
                        <input class="form-control mb-3" type="email" name="email" id="" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="label-form mb-1" for="">@lang('messages.contact-item-3')</label>
                        <input class="form-control mb-3" type="text" name="subject" id="" placeholder="@lang('messages.contact-item-3')">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="label-form mb-1" for="">@lang('messages.contact-item-4')</label>
                        <textarea name="message" id=""rows="5" class="form-control mb-3" placeholder="@lang('messages.contact-item-4')"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary" type="submit">@lang('messages.contact-item-5')</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="py-5">
            <div class="row gx-lg-5 text-primary">
                <div class="col-lg-6 col-xxl-3 mb-5 text-center">
                    <div class="card border-0 h-100">
                        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg></div>
                        <h2 class="fs-4 fw-bold">@lang('messages.contact-item-6')</h2>
                        <p class="mb-0">San Luis Potosí, S.L.P, México</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 mb-5 text-center">
                    <div class="card border-0 h-100">
                        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg></div>
                        <h2 class="fs-4 fw-bold">@lang('messages.contact-item-7')</h2>
                        <p class="mb-0"><a href="tel:481 144 4916">+52 1 481-144-4916</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 mb-5 text-center">
                    <div class="card border-0 h-100">
                        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg></div>
                        <h2 class="fs-4 fw-bold">Email</h2>
                        <p class="mb-0"><a href="mailto:israelvargasm2@gmail.com"
                                target="_blank">israelvargasm2@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 mb-5 text-center">
                    <div class="card border-0 h-100">
                        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg></div>
                        <h2 class="fs-4 fw-bold">Github</h2>
                        <p class="mb-0"><a href="https://github.com/israelvargasm2"
                                target="_blank">/israelvargasm2</a></p>
                    </div>
                </div>
            </div>
        </div>

        @if (session('info'))
            <div class="toast align-items-center show text-white bg-success border-0 position-absolute end-0"
                role="alert" aria-live="assertive" aria-atomic="true" style="top: 56px">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('info') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        @endif
    </div>
    @endsection
