 <!-- start of breadcumb-section -->
 <div class="wpo-breadcumb-area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="wpo-breadcumb-wrap">
                     <h2>{{ $Title }}</h2>
                     <ul>
                         <li><a href="{{ url('/') }}">Home</a></li>
                         <li><span>Affiliates</span></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end of wpo-breadcumb-section-->
 <!-- <div style="padding: 2em"></div> -->
 <!-- start of wpo-blog-section -->

 <section class="wpo-blog-section section-padding">
     <div class="container">
         <div class="wpo-blog-items">
             <div class="row">
                 @isset($GlobalData)

                     @foreach ($GlobalData as $data)
                         <div class="">
                             <div class="col-lg-12 col-12">
                                 <div class="wpo-benefits-item">
                                     <div class="accordion" id="accordionExample">
                                         <div class="accordion-item">
                                             <h3 class="accordion-header"
                                                 id="headingOne{{ $data->id }}">
                                                 <button class="accordion-button"
                                                     type="button"
                                                     data-bs-toggle="collapse"
                                                     data-bs-target="#collapseOne"
                                                     aria-expanded="true"
                                                     aria-controls="collapseOne">
                                                     {{ $data->Name }}
                                                 </button>
                                             </h3>
                                             {{-- <div id="collapseOne{{ $data->id }}"
                                                 class="accordion-collapse collapse show"
                                                 aria-labelledby="headingOne{{ $data->id }}"
                                                 data-bs-parent="#accordionExample">
                                                 <div class="accordion-body">
                                                     <p>Affiliates</p>
                                                 </div>
                                             </div> --}}
                                         </div>


                                     </div>
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
