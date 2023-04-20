<!-- start partners-section -->
<section class="partners-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="wpo-section-title">
                    {{-- <span>Partnerships</span> --}}
                    <h2>Our Partners</h2>
                    {{-- <p>AfriChild values partnerships</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="partner-grids partners-slider owl-carousel">
                    @isset($Partners)
                    @foreach ($Partners as $data)
                    <div class="grid">
                        <img style="height: 11vh" src="{{ asset($data->URL) }}" alt="AfriChild Center Makerere | {{ $data->Title }}">
                    </div>
                    @endforeach
                    @endisset
                </div>
            </div>
        </div>

    </div>
    </div> <!-- end container -->
</section>
<!-- end partners-section -->
