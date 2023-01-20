@isset($Events)
    @foreach ($Events as $data)
        <div class="modal fade" id="Events{{ $data->id }}" data-backdrop="static"
            data-keyboard="false" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">

                            {{ $data->Title }}, <a href="#"
                                style="color: #de0b81 !important;">
                                From
                                {{ date('F j, Y,', strtotime($data->StartDate)) }}
                                to
                                {{ date('F j, Y,', strtotime($data->EndDate)) }}
                            </a>

                        </h5>
                        <button type="button" class="btn theme-btn"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        {!! $data->Desc !!}


                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endisset
