@extends('layouts.app')

@section('title', 'Add Job')

@section('parent', 'Job')

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/vendor/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/quill.bubble.css') }}">
@endpush

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>@yield('title')</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">@yield('parent')</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Job</h5>
                            <form method="post" action="{{ url('') }}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                   placeholder="T-Shirt Design">
                                            <small id="titleHelp" class="form-text text-muted">Enter Your Job Title</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="clientId">Select Client</label>
                                            <select class="form-control" id="clientId" name="clientId">
                                                <option value="">Category 1</option>
                                                <option value="">Category 2</option>
                                                <option value="">Category 3</option>
                                                <option value="">Category 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="category">Select Category</label>
                                            <select class="form-control" id="category" name="category">
                                                <option value="">Category 1</option>
                                                <option value="">Category 2</option>
                                                <option value="">Category 3</option>
                                                <option value="">Category 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="timeline">Timeline</label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="timeline" name="timeline">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Minutes</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="bufferTimeline">Allowed Buffer Timeline</label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" id="bufferTimeline"
                                                       name="bufferTimeline" placeholder="15">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Minutes</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="budget">Budget</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">৳</span>
                                                </div>
                                                <input type="text" class="form-control" id="budget" name="budget"
                                                       placeholder="15">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="design">Upload Design Sample</label>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="design" name="design">
                                                    <label class="custom-file-label" for="design">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="expertLevel">Worker Expert Level</label>
                                            <select class="form-control" id="expertLevel" name="expertLevel">
                                                <option value="">Category 1</option>
                                                <option value="">Category 2</option>
                                                <option value="">Category 3</option>
                                                <option value="">Category 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="requirement">Other Requirements</label>
                                    <div class="html-editor ql-container ql-snow" id="requirement" name="requirement">
                                        <div class="ql-editor ql-blank" contenteditable="true" spellcheck="false">
                                            <p>
                                                <br>
                                            </p>
                                        </div>
                                        <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                        <div class="ql-tooltip ql-hidden">
                                            <a class="ql-preview" target="_blank" href="about:blank"></a>
                                            <input type="text">
                                            <a class="ql-action"></a>
                                            <a class="ql-remove"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('js/vendor/quill.min.js') }}" style="opacity: 1;"></script>
@endpush

