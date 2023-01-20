<!-- start of wpo-blog-section -->
<section class="wpo-blog-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="wpo-section-title">
                    {{-- <span>Our Blog</span> --}}
                    <h2>Research</h2>
                    {{-- <p></p> --}}
                </div>
            </div>
        </div>
        <div class="wpo-blog-items">
            <div class="row">
                @isset($GlobalData)

                @foreach ($GlobalData->take(3) as $data)
                <div class="col col-lg-4 col-md-8 col-12 mb-4">
                    <div class="wpo-blog-item">
                        <div class="wpo-blog-img">
                            <a href="{{url('AfriChildResearchPublications')}}" target="_blank"> <img src="{{ asset($data->Thumbnail) }}" style="width: 100%; height: auto;"></a>
                        </div>

                    </div>
                </div>
                @endforeach
                @endisset


            </div>
        </div>

    </div>
</section>
<!-- end of wpo-blog-section -->
