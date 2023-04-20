@isset($OurWork)
@foreach ($OurWork as $data)
<div class="modal fade" id="More{{ $data->id }}" data-backdrop="static" data-keyboard="false"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">

                    {{ucfirst( $data->Title) }}

                </h5>
                <button type="button" class="btn ms-3 theme-btn" data-bs-dismiss="modal" aria-label="Close">
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