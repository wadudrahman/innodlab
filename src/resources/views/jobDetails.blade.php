@extends('layouts.app')

@section('title', 'Job List')

@section('parent', 'Job')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2"><h1>Job Details 1</h1>
                        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb pt-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>
          
                <div class="col-12 col-md-12 col-xl-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="glide gallery mb-4 glide--ltr glide--carousel glide--swipeable">
                                <div class="glide__track" data-glide-el="track">
                                    <div class="glide__slides"
                                         style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 1573px; transform: translate3d(-329px, 0px, 0px);">
                                        <a href="{{ url('img/details/3.jpg')}}" class="glide__slide--clone"
                                           style="width: 133px; margin-right: 5px;"><img class="card-img"
                                                                                         src="{{ url('img/details/small-3.jpg') }}"
                                                                                         alt="Third image"> </a><a
                                            href="{{ url('img/details/2.jpg')}}" class="glide__slide--clone"
                                            style="width: 133px; margin-left: 5px; margin-right: 5px;"><img
                                                class="card-img" src="{{ url('img/details/small-2.jpg')}}" alt="Fourth image">
                                        </a><a href="{{ url('img/details/3.jpg')}}" class="glide__slide--clone"
                                               style="width: 133px; margin-left: 5px; margin-right: 5px;"><img
                                                class="card-img" src="{{ url('img/details/3.jpg')}}" alt="Fifth image"></a><a
                                            href="{{ url('img/details/1.jpg')}}" class="glide__slide--active"
                                            style="width: 133px; margin-left: 5px; margin-right: 5px;"><img
                                                class="card-img" src="{{ url('img/details/1.jpg')}}" alt="First image"> </a><a
                                            href="{{ url('img/details/2.jpg')}}"
                                            style="width: 133px; margin-left: 5px; margin-right: 5px;"><img
                                                class="card-img" src="{{ url('img/details/2.jpg')}}" alt="Second image">
                                        </a><a href="{{ url('img/details/3.jpg')}}"
                                               style="width: 133px; margin-left: 5px; margin-right: 5px;"><img
                                                class="card-img" src="{{ url('img/details/3.jpg')}}" alt="Third image"> </a><a
                                            href="{{ url('img/details/2.jpg')}}"
                                            style="width: 133px; margin-left: 5px; margin-right: 5px;"><img
                                                class="card-img" src="{{ url('img/details/2.jpg')}}" alt="Fourth image">
                                        </a><a href="{{ url('img/details/2.jpg')}}"
                                               style="width: 133px; margin-left: 5px; margin-right: 5px;"><img
                                                class="card-img" src="{{ url('img/details/1.jpg')}}" alt="Fifth image"></a><a
                                            href="{{ url('img/details/1.jpg')}}" class="glide__slide--clone"
                                            style="width: 133px; margin-left: 5px; margin-right: 5px;"><img
                                                class="card-img" src="{{ url('img/details/1.jpg')}}" alt="First image"> </a><a
                                            href="{{ url('img/details/1.jpg')}}" class="glide__slide--clone"
                                            style="width: 133px; margin-left: 5px; margin-right: 5px;"><img
                                                class="card-img" src="{{ url('img/details/2.jpg')}}" alt="Second image">
                                        </a><a href="{{ url('img/details/3.jpg')}}" class="glide__slide--clone"
                                               style="width: 133px; margin-left: 5px;"><img class="card-img"
                                                                                            src="{{ url('img/details/3.jpg')}}"
                                                                                            alt="Third image"> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5"><h5 class="card-title">Game Changing Features</h5>
                                <p>Blended value human-centered social innovation resist scale and impact issue outcomes
                                    bandwidth efficient. A; social return on investment, change-makers, support a,
                                    co-create commitment because sustainable. Rubric when vibrant black lives matter
                                    benefit corporation human-centered. Save the world, problem-solvers support silo
                                    mass incarceration. Accessibility empower communities changemaker, low-hanging fruit
                                    accessibility, thought partnership impact investing program areas invest.
                                    Contextualize optimism unprecedented challenge, empower inclusive. Living a fully
                                    ethical life the resistance segmentation social intrapreneurship efficient inspire
                                    external partners. Systems thinking correlation, social impact; when revolutionary
                                    bandwidth. Engaging, revolutionary engaging; empower communities policymaker shared
                                    unit of analysis technology inspiring social entrepreneurship.</p>
                                <p>Mass incarceration, preliminary thinking systems thinking vibrant thought leadership
                                    corporate social responsibility. Green space global, policymaker; shared value
                                    disrupt segmentation social capital. Thought partnership, optimism citizen-centered
                                    commitment, relief scale and impact the empower communities circular. Contextualize
                                    boots on the ground; uplift big data, co-creation co-create segmentation youth
                                    inspire. Innovate innovate overcome injustice.</p></div>
                            <div class="mb-5"><h5 class="card-title">Unprecedented Challenge</h5>
                                <ul class="list-unstyled">
                                    <li>Preliminary thinking systems</li>
                                    <li>Bandwidth efficient</li>
                                    <li>Green space</li>
                                    <li>Social impact</li>
                                    <li>Thought partnership</li>
                                    <li>Fully ethical life</li>
                                </ul>
                            </div>
                            <div class="mb-5"><h5 class="card-title">Revolutionary Bandwidth</h5>
                                <p>Blended value human-centered social innovation resist scale and impact issue outcomes
                                    bandwidth efficient. A; social return on investment, change-makers, support a,
                                    co-create commitment because sustainable. Rubric when vibrant black lives matter
                                    benefit corporation human-centered. Save the world, problem-solvers support silo
                                    mass incarceration. Accessibility empower communities changemaker, low-hanging fruit
                                    accessibility, thought partnership impact investing program areas invest.
                                    Contextualize optimism unprecedented challenge, empower inclusive. Living a fully
                                    ethical life the resistance segmentation social intrapreneurship efficient inspire
                                    external partners. Systems thinking correlation, social impact; when revolutionary
                                    bandwidth. Engaging, revolutionary engaging; empower communities policymaker shared
                                    unit of analysis technology inspiring social entrepreneurship.Mass incarceration,
                                    preliminary thinking systems thinking vibrant thought leadership corporate social
                                    responsibility. Green space global, policymaker; shared value disrupt segmentation
                                    social capital. Thought partnership, optimism citizen-centered commitment, relief
                                    scale and impact the empower communities circular. Contextualize boots on the
                                    ground; uplift big data, co-creation co-create segmentation youth inspire. Innovate
                                    innovate overcome injustice.</p>
                                <p>Systems thinking correlation, social impact; when revolutionary bandwidth. Engaging,
                                    revolutionary engaging; empower communities policymaker shared unit of analysis
                                    technology inspiring social entrepreneurship. Thought partnership, optimism
                                    citizen-centered commitment, relief scale and impact the empower communities
                                    circular. Contextualize boots on the ground; uplift big data, co-creation co-create
                                    segmentation youth inspire. Innovate innovate overcome injustice.</p></div>
                            <div><h5 class="card-title">Game Changing Features</h5>
                                <p>Blended value human-centered social innovation resist scale and impact issue outcomes
                                    bandwidth efficient. A; social return on investment, change-makers, support a,
                                    co-create commitment because sustainable. Rubric when vibrant black lives matter
                                    benefit corporation human-centered. Save the world, problem-solvers support silo
                                    mass incarceration. Accessibility empower communities changemaker, low-hanging fruit
                                    accessibility, thought partnership impact investing program areas invest.
                                    Contextualize optimism unprecedented challenge, empower inclusive. Living a fully
                                    ethical life the resistance segmentation social intrapreneurship efficient inspire
                                    external partners. Systems thinking correlation, social impact; when revolutionary
                                    bandwidth. Engaging, revolutionary engaging; empower communities policymaker shared
                                    unit of analysis technology inspiring social entrepreneurship.</p>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you a complete account of the system, and
                                    expound the actual teachings of the great explorer of the truth, the master-builder
                                    of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it
                                    is pleasure, but because those who do not know how to pursue pleasure rationally
                                    encounter consequences that are extremely painful. Nor again is there anyone who
                                    loves or pursues or desires to obtain pain of itself, because it is pain, but
                                    because occasionally circumstances occur in which toil and pain can procure him some
                                    great pleasure. To take a trivial example, which of us ever undertakes laborious
                                    physical exercise, except to obtain some advantage from it? But who has any right to
                                    find fault with a man who chooses to enjoy a pleasure that has no annoying
                                    consequences, or one who avoids a pain that produces no resultant pleasure? On the
                                    other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                    desire, that they cannot foresee the pain and trouble that are bound to ensue; and
                                    equal blame belongs to those who fail in their duty through weakness of will, which
                                    is the same as saying through shrinking from toil and pain.</p>
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our
                                    power of choice is untrammelled and when nothing prevents our being able to do what
                                    we like best, every pleasure is to be welcomed and every pain avoided. But in
                                    certain circumstances and owing to the claims of duty or the obligations of business
                                    it will frequently occur that pleasures have to be repudiated and annoyances
                                    accepted. The wise man therefore always holds in these matters to this principle of
                                    selection: he rejects pleasures to secure other greater pleasures, or else he
                                    endures pains to avoid worse pains. But I must explain to you how all this mistaken
                                    idea of denouncing pleasure and praising pain was born and I will give you a
                                    complete account of the system, and expound the actual teachings of the great
                                    explorer of the truth, the master-builder of human happiness. No one rejects,
                                    dislikes, or avoids pleasure itself, because it is pleasure, but because those who
                                    do not know how to pursue pleasure rationally encounter consequences that are
                                    extremely painful. Nor again is there anyone who loves or pursues or desires to
                                    obtain pain of itself, because it is pain, but because occasionally circumstances
                                    occur in which toil and pain can procure him some great pleasure. To take a trivial
                                    example, which of us ever undertakes laborious physical exercise, except to obtain
                                    some advantage from it? But who has any right to find fault with a man who chooses
                                    to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                                    produces no resultant pleasure? On the other hand, we denounce with righteous
                                    indignation and dislike men who are so beguiled and demoralized by the charms of
                                    pleasure of the moment, so blinded by desire, that they cannot foresee the pain and
                                    trouble that are bound to ensue; and equal blame belongs to those who fail in their
                                    duty through weakness of will, which is the same as saying through shrinking from
                                    toil and pain. These cases are perfectly simple and easy to distinguish. In a free
                                    hour, when our power of choice is untrammelled and when nothing prevents our being
                                    able to do what we like best, every pleasure is to be welcomed and every pain
                                    avoided. But in certain circumstances and owing to the claims of duty or the
                                    obligations of business it will frequently occur that pleasures have to be
                                    repudiated and annoyances accepted.</p></div>
                            <div class="mt-4 feedback-container">
                                <div class="text-center"><p class="feedback-answer">Was this helpful?</p><a
                                        class="link nay" data-message="Thanks, we will work on this!"
                                        data-placement="top" data-toggle="tooltip" title="" href="#"
                                        data-original-title="Nay"><i class="simple-icon-dislike"></i></a> <a
                                        class="link yay" data-message="Thanks, glad to help!" data-placement="top"
                                        data-toggle="tooltip" title="" href="#" data-original-title="Yay"><i
                                            class="simple-icon-like"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-4">
                    <div class="card mb-4">
                        <div class="card-body"><h5 class="card-title">Policies</h5>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#" class="btn-link">Preliminary thinking systems</a></li>
                                <li><a href="#" class="btn-link">Bandwidth efficient</a></li>
                                <li><a href="#" class="btn-link">Green space</a></li>
                                <li><a href="#" class="btn-link">Social impact</a></li>
                                <li><a href="#" class="btn-link">Thought partnership</a></li>
                                <li><a href="#" class="btn-link">Fully ethical life</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body"><h5 class="card-title">Categories</h5>
                            <div class="d-flex flex-row align-items-center mb-3"><a class="d-block position-relative"
                                                                                    href="#"><i
                                        class="iconsminds-director large-icon initial-height"></i></a>
                                <div class="pl-3 pt-2 pr-2 pb-2"><a href="#"><p class="list-item-heading mb-1">Using the
                                            Template</p></a></div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3"><a class="d-block position-relative"
                                                                                    href="#"><i
                                        class="iconsminds-security-settings large-icon initial-height"></i></a>
                                <div class="pl-3 pt-2 pr-2 pb-2"><a href="#"><p class="list-item-heading mb-1">
                                            Security</p></a></div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3"><a class="d-block position-relative"
                                                                                    href="#"><i
                                        class="iconsminds-male large-icon initial-height"></i></a>
                                <div class="pl-3 pt-2 pr-2 pb-2"><a href="#"><p class="list-item-heading mb-1">Account
                                            Settings</p></a></div>
                            </div>
                            <div class="d-flex flex-row align-items-center"><a class="d-block position-relative"
                                                                               href="#"><i
                                        class="iconsminds-newspaper large-icon initial-height"></i></a>
                                <div class="pl-3 pt-2 pr-2 pb-2"><a href="#"><p class="list-item-heading mb-1">Policies
                                            and Docs</p></a></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>
@endsection

