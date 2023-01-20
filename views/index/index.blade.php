<!-- start of wpo-hero-section-1 -->
<section class="wpo-hero-section-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col col-xs-6 col-lg-6">
                <div class="wpo-hero-section-text">
                    <div class="wpo-hero-title-top">
                        <span>Child Focused Research</span>
                    </div>
                    <div class="wpo-hero-title">
                        <h2>We are a Centre of Excellence in the study of the
                            African child</h2>
                    </div>
                    <!-- <div class="wpo-hero-subtitle">
                        <p>Lorem Ipsum</p>
                    </div> -->
                    <div class="btns">
                        <a href="{{ route('AboutTheAfriChildCenterMakerere') }}" class="btn theme-btn-s2">Learn
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-vec">
                    <div class="right-items-wrap">
                        <div class="right-item">
                            <div class="r-img">
                                <img src="https://images.unsplash.com/photo-1510736769521-207ed84f191e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=315&q=80" alt="">
                            </div>
                         <div class="wpo-happy-client">
                                <div class="wpo-happy-client-img">

                     {{-- <ul class="wpo-happy-client-slide owl-carousel">
                                        
                                     @isset($Partners)
                                     @foreach ($Partners as $data)
                                        <li><img src="{{ asset($data->URL) }}" alt="" style="height: 10vh"></li>
                                       
                                         @endforeach
                                          @endisset
                                  
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <div class="right-item">
                            <div class="wpo-total-project">
                                <div class="wpo-total-project-wrap">
                                    <div class="wpo-total-project-icon pt-2">
                                        <i class="ti ti-book fs-1 text-light fw-bolder"></i>
                                    </div>
                                    <div class="wpo-total-project-text">
                                        <h3>50 +</h3>
                                        <p class="fw-bolder">Publications</p>
                                    </div>
                                </div>
                                <div class="project-shape">
                                    <img src="https://images.unsplash.com/photo-1549231634-8633391d04b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=399&q=80" alt="">
                                </div>
                            </div>
                            <div class="r-img">
                                <img src="https://images.unsplash.com/photo-1532334836699-88e90d97c8fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of wpo-hero-section-1 slider -->
<!-- start of wpo-about-section -->
<!-- wpo-cta-area end -->
<!-- wpo-event-area start -->
<div class="wpo-blog-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="wpo-section-title">
                    {{-- <span>Events</span> --}}
                    <h2>@AfriChild</h2>
                    {{-- <p>AfriChild Events</p> --}}
                </div>
            </div>
        </div>
        <div class="wpo-blog-items hide-scrollbar">
            <div class="row hide-scrollbar">
                <div class=" col-lg-6 col-md-6 hide-scrollbar ">
                    <div class="wpo-blog-item hide-scrollbar">
                        <div class="wpo-blog-img hide-scrollbar">
                            <a href="https://twitter.com/AfriChildCentre?ref_src=twsrc%5Etfw" class="twitter-timeline" data-width="auto" data-height="630">
                                <img src="https://twitter.com/AfriChildCentre/photo" alt="Twitter thumbnail">
                            </a>
                        </div>
                        {{-- <div class="wpo-blog-content">
                            <div class="wpo-blog-content-top">
                                <blockquote class="twitter-tweet">
                                    <p>Here's the text of the tweet</p>
                                    <a href="https://twitter.com/AfriChildCentre?ref_src=twsrc%5Etfw">Link to the tweet</a>
                                </blockquote>
                                <div class="btns center p-1">
                                    <a href="https://twitter.com/AfriChildCentre" class="card-link">@AfriChildCentre</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 ">
                    <div class="card" style=" ">
                        <div class="embed-responsive embed-responsive-1by1">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JROXQavs0Ls" width="100%" height="630"></iframe>
                        </div>
                        {{-- <div class="card-body">
                            <h5 class="card-title">Video Title</h5>
                            <p class="card-text">Video description</p>
                            <a style="background-color: #de0b81" target="_blank" href="https://www.youtube.com/@theafrichildcentre272" class="btn btn-primary">Visit our Youtube</a>
                        </div> --}}
                    </div>
                </div>
                {{-- @isset($Events)

                @foreach ($Events->take(1) as $data)
                <div class="col col-lg-4 col-md-8 col-12">
                    <div class="wpo-blog-item">
                        <div class="wpo-blog-img">
                            <img src="{{ asset($data->URL) }}" style="width: 100%; height: auto;">
            </div>
            <div class="wpo-blog-content">
                <div class="wpo-blog-content-top">
                    <h2 style="font-size: 19px; height: 7vh; overflow-y: scroll;">
                        <a href="#">
                            {{ $data->Title }}
                        </a>
                    </h2>

                    <h2 style=" font-size: 12px; height: 7vh; overflow-y: scroll;">
                        <a href="#" style="color: #de0b81 !important;">
                            From
                            {{ date('F j, Y,', strtotime($data->StartDate)) }}
                            to
                            {{ date('F j, Y,', strtotime($data->EndDate)) }}
                        </a>
                    </h2>
                    <p style="height: 15vh; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; padding-left: 10px; padding-right: 10px">

                        {!! Str::limit(strip_tags($data->Desc), $limit = 100, $end = '...') !!}

                    </p>
                    <div class="btns center p-1">
                        <a href="#Events{{ $data->id }}" data-bs-toggle="modal" class="btn theme-btn custom-btn-sm">Read More</a>
                    </div>
                </div>




            </div>
        </div>
    </div>
    @endforeach

    @endisset --}}

</div>
</div>
</div>
</div>

@include('index.EventsModal')
@include('index.Blog')
@include('index.Partners')
<!-- wpo-event-area end -->
