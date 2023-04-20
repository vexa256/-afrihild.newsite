<div class="card-body pt-3 bg-light shadow-lg table-responsive">
    {!! Alert(
        $icon = 'fa-info',
        $class = 'alert-primary',
        $Title = 'AfriChild Website Reports Database',
        $Msg = 'Manage information in the AfriChild Website Reports database',
    ) !!}
</div>
<div class="card-body pt-3 bg-light shadow-lg table-responsive">
    {{ HeaderBtn($Toggle = 'New', $Class = 'btn-danger', $Label = 'New Information', $Icon = 'fa-plus') }}
    <table class="mytable table table-rounded table-bordered border gy-3 gs-3">
        <thead>
            <tr class="fw-bold text-gray-800 border-bottom border-gray-200">
                {{-- <th>ID</th>
                <th>UID</th> --}}
                <th>Title</th>
                <th>Title2</th>
                <th>Thumbnail</th>
                <th>PDF Resource</th>

                <th>Description</th>
                {{-- <th>Created at</th>
                <th>Updated at</th> --}}
                <th>Update</th>
                <th class="bg-dark text-light">Delete</th>
            </tr>
        </thead>
        <tbody>
            @isset($DatabaseData)
                @foreach ($DatabaseData as $data)
                    <tr>
                        {{-- <td>{{ $data->id }}</td>
                        <td>{{ $data->UID }}</td> --}}
                        <td>{{ $data->Title }}</td>
                        <td>{{ $data->Title2 }}</td>
                        <td> <a href="{{ asset($data->Thumbnail) }}"
                                data-lightbox="photo-{{ $data->id }}"> <button
                                    class="btn btn-sm btn-danger shadow-lg"> <i
                                        class="fas fa-image"></i> </button> </a></td>
                        <td> <a target="_blank" href="{{ asset($data->URL) }}">
                                <button class="btn btn-sm btn-danger shadow-lg"> <i
                                        class="fas fa-file-pdf"></i> </button> </a>
                        </td>
                        <td>{!! $data->Desc !!}</td>
                        {{-- <td>{{ $data->created_at }}</td>
                        <td>{{ $data->updated_at }}</td> --}}
                        <td>
                            <a data-bs-toggle="modal"
                                class="btn shadow-lg btn-dark btn-sm admin"
                                href="#Update{{ $data->id }}">
                                <i class="fas fa-edit" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            {!! ConfirmBtn(
                                $data = [
                                    'msg' => 'You want to delete this record',
                                    'route' => route('MassDelete', [
                                        'id' => $data->id,
                                        'TableName' => 'reports',
                                    ]),
                                    'label' => '<i class="fas fa-trash"></i>',
                                    'class' => 'btn btn-danger btn-sm deleteConfirm',
                                ],
                            ) !!}
                        </td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
</div>


@isset($DatabaseData)
    @foreach ($DatabaseData as $up)
        {{ UpdateModalHeader($Title = 'Update the selected  record', $ModalID = $up->id) }}
        <form enctype="multipart/form-data" action="{{ route('MassUpdate') }}"
            class="" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3 mt-3 ">
                    <div class="mb-3">
                        <label class="required form-label">reports PDF</label>
                        <input type="file" name="URL" class="form-control"
                            accept=".pdf" placeholder="">
                    </div>
                </div>

                <div class="col-md-6 mb-3 mt-3 ">
                    <div class="mb-3">
                        <label class="required form-label">Thumbnail</label>
                        <input type="file" name="Thumbnail" class="form-control"
                            accept="image/*" placeholder="">
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $up->id }}">

                <input type="hidden" name="TableName" value="reports">

                {{ RunUpdateModalFinal($ModalID = $up->id, $Extra = '', $csrf = null, $Title = null, $RecordID = $up->id, $col = '6', $te = '12', $TableName = 'reports') }}
            </div>


            {{ _UpdateModalFooter() }}

        </form>
    @endforeach
@endisset


@include('Reports.NewRep')
