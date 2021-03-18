@extends('layouts.app')

@section('title', 'Job Title')

@section('parent', 'Job')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>@yield('title')</h1>
                        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb pt-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">@yield('parent')</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Job Details</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-xl-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-5">
                                <h5 class="card-title">Job Description</h5>
                                <p>
                                    Blended value human-centered social innovation resist scale and impact issue
                                    outcomes
                                    bandwidth efficient. A; social return on investment, change-makers, support a,
                                    co-create commitment because sustainable. Rubric when vibrant black lives matter
                                    benefit corporation human-centered. Save the world, problem-solvers support silo
                                    mass incarceration. Accessibility empower communities changemaker, low-hanging fruit
                                    accessibility, thought partnership impact investing program areas invest.
                                    Contextualize optimism unprecedented challenge, empower inclusive. Living a fully
                                    ethical life the resistance segmentation social intrapreneurship efficient inspire
                                    external partners. Systems thinking correlation, social impact; when revolutionary
                                    bandwidth. Engaging, revolutionary engaging; empower communities policymaker shared
                                    unit of analysis technology inspiring social entrepreneurship.
                                </p>
                                <p>
                                    Mass incarceration, preliminary thinking systems thinking vibrant thought leadership
                                    corporate social responsibility. Green space global, policymaker; shared value
                                    disrupt segmentation social capital. Thought partnership, optimism citizen-centered
                                    commitment, relief scale and impact the empower communities circular. Contextualize
                                    boots on the ground; uplift big data, co-creation co-create segmentation youth
                                    inspire. Innovate innovate overcome injustice.
                                </p>
                            </div>
                            <div class="mt-4 feedback-container">
                                <div class="text-center">
                                    <p class="feedback-answer">Found yourself perfect for the job?</p>
                                    <a class="btn btn-sm btn-outline-success" title="" href="#">
                                        <i class="simple-icon-like"></i> Apply Now !
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-4">
                    <div class="card mb-4 d-none d-lg-block">
                        <div class="card-body">
                            <div class="row social-image-row gallery">
                                <div class="col-12">
                                    <a href="img/products/marble-cake.jpg">
                                        <img class="img-fluid border-radius"
                                             src="img/products/marble-cake-thumb.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex flex-row align-items-center mb-3">
                                <a class="d-block position-relative" href="javascript:void(0)">
                                    <i class="iconsminds-folder large-icon initial-height"></i>
                                </a>
                                <div class="pl-3 pt-2 pr-2 pb-2">
                                    <a href="javascript:void(0)"><p class="list-item-heading mb-1">Category</p></a>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3">
                                <a class="d-block position-relative" href="javascript:void(0)">
                                    <i class="iconsminds-clock large-icon initial-height"></i>
                                </a>
                                <div class="pl-3 pt-2 pr-2 pb-2">
                                    <a href="javascript:void(0)"><p class="list-item-heading mb-1">Timeline</p></a>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3">
                                <a class="d-block position-relative" href="javascript:void(0)">
                                    <i class="iconsminds-clock-back large-icon initial-height"></i>
                                </a>
                                <div class="pl-3 pt-2 pr-2 pb-2">
                                    <a href="javascript:void(0)">
                                        <p class="list-item-heading mb-1">Allowed Buffered Time</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <a class="d-block position-relative" href="javascript:void(0)">
                                    <i class="iconsminds-coins large-icon initial-height"></i>
                                </a>
                                <div class="pl-3 pt-2 pr-2 pb-2">
                                    <a href="javascript:void(0)"><p class="list-item-heading mb-1">Budget</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Apply for Extra Time</h5>
                            <form>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" id="timeline" name="timeline">
                                        <div class="input-group-append">
                                            <span class="input-group-text">Minutes</span>
                                        </div>
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">We'll
                                        never share your email with anyone else.</small>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div role="dialog" id="baguetteBox-overlay"
             aria-labelledby="baguetteBox-figure-0 baguetteBox-figure-1 baguetteBox-figure-2 baguetteBox-figure-3 baguetteBox-figure-4 baguetteBox-figure-5"
             aria-describedby="baguetteBox-figcaption-0 baguetteBox-figcaption-1 baguetteBox-figcaption-2 baguetteBox-figcaption-3 baguetteBox-figcaption-4 baguetteBox-figcaption-5"
             class="visible" style="opacity: 1; background-color: rgba(0, 0, 0, 0.8); display: block;">
            <div id="baguetteBox-slider" style="transform: translate3d(0%, 0px, 0px);">
                <div class="full-image" id="baguette-img-0">
                    <figure id="baguetteBox-figure-0"><img
                            src="https://dore-jquery.coloredstrategies.com/img/products/marble-cake.jpg" alt="">
                    </figure>
                </div>
            </div>
            <button type="button" id="close-button" aria-label="Close" class="baguetteBox-button">
                <svg width="30" height="30">
                    <g stroke="rgb(160,160,160)" stroke-width="4">
                        <line x1="5" y1="5" x2="25" y2="25"></line>
                        <line x1="5" y1="25" x2="25" y2="5"></line>
                    </g>
                </svg>
            </button>
        </div>
    </main>
@endsection

