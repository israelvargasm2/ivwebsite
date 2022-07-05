@extends('layouts.base')

@section('title', 'Inicio')

@section('content')
    <section>
        <div class="container">
            <div style="height: calc(100vh - 56px)">
                <div id="face-section" class="w-100 text-center d-flex justify-content-center align-items-center">
                    <div>
                        <h1 class="display-2">@lang('messages.home-item-1')</h1>
                        <h1 class="display-6">@lang('messages.home-item-2')</h1>
                    </div>
                </div>
                <div class="text-center">
                    <a class="nav-link" href="#about-me"><i class="fa-solid fa-circle-chevron-down fa-3x"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-primary py-5">
            <div id="about-me" class="text-center text-white item-content-1 mx-auto">
                <div>
                    <h2>@lang('messages.home-item-3')</h1>
                </div>
                <div>
                    <p class="h5 lh-base">
                        @lang('messages.home-item-4')
                    </p>
                </div>
            </div>
            <div class="mx-auto mt-5" style="width: 300px;">
                <img src="{{ asset('storage/images/me-photo.jpg') }}" alt="" class="img-fluid" style="border-radius: 100%">
            </div>
        </div>
    </section>

    <section>
        <div class="mx-auto my-5" style="max-width: 60rem">
            <div class="row row-content text-center">
                <div class="col p-5 column-content" style="border-right: solid rgb(220, 220, 220) 1px;">
                    <div class="row">
                        <p class="h4">Backend</p>
                        <p>@lang('messages.home-item-5')</p>
                        <p class="h5 mt-4">@lang('messages.home-item-6')</p>
                        <p>Python, PHP y Java</p>
                        <p class="h5 mt-4">@lang('messages.home-item-7')</p>
                        <ul class="list-unstyled">
                            <li>Laravel</li>
                            <li>Flask</li>
                            <li>MySQL</li>
                            <li>PostgreSQL</li>
                        </ul>
                    </div>
                </div>
                <div class="col p-5 column-content">
                    <div class="row">
                        <p class="h4">Frontend</p>
                        <p>@lang('messages.home-item-8')</p>
                        <p class="h5 mt-4">@lang('messages.home-item-6')</p>
                        <p>HTML5, CSS y JavaScript</p>
                        <p class="h5 mt-4">@lang('messages.home-item-7')</p>
                        <ul class="list-unstyled">
                            <li>Bootstrap</li>
                            <li>JQuery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
