<!--begin::Card body-->
<div class="card-body pt-3 bg-light shadow-lg table-responsive">
    {!! Alert(
        $icon = 'fa-info',
        $class = 'alert-primary',
        $Title = 'About AfriChild Database',
        $Msg = 'Manage information in the About AfriChild database',
    ) !!}
</div>
<div class="card-body pt-3 bg-light shadow-lg table-responsive">
    {{ HeaderBtn($Toggle = 'New', $Class = 'btn-danger', $Label = 'New Information', $Icon = 'fa-plus') }}
    <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
        <thead>
            <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">

                <th>Page Title</th>

                <th>Vision</th>
                <th>Mission</th>
                <th>About Us Photo</th>

                <th>Update</th>
                <th class="bg-dark text-light"> Delete</th>
            </tr>
        </thead>
        <tbody>
            @isset($DatabaseData)
                @foreach ($DatabaseData as $data)
                    <tr>

                        <td>{{ $data->PageTitle }}</td>

                        <td>{!! $data->Vision !!}</td>
                        <td>{!! $data->Mission !!}</td>
                        <td> <a href="{{ asset($data->AboutUsPhoto) }}"
                                data-lightbox="photo-{{ $data->id }}">
                                <button class="btn btn-sm btn-danger shadow-lg">
                                    <i class="fas fa-image"></i>
                                </button>
                            </a></td>


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
                                        'TableName' => 'about_africhild',
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
<!--end::Card body-->

@include('About.NewAbout')

{{-- @include('Departments.NewDept') --}}

@isset($DatabaseData)
    @foreach ($DatabaseData as $up)
        {{ UpdateModalHeader($Title = 'Update the selected  record', $ModalID = $up->id) }}
        <form enctype="multipart/form-data" action="{{ route('MassUpdate') }}"
            class="" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3 mt-3 ">
                    <div class="mb-3">
                        <label class="required form-label">About us
                            photo</label>
                        <input type="file" name="AboutUsPhoto"
                            class="form-control" accept="image/*" placeholder="">
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $up->id }}">

                <input type="hidden" name="TableName" value="about_africhild">

                {{ RunUpdateModalFinal($ModalID = $up->id, $Extra = '', $csrf = null, $Title = null, $RecordID = $up->id, $col = '6', $te = '12', $TableName = 'about_africhild') }}
            </div>


            {{ _UpdateModalFooter() }}

        </form>
    @endforeach
@endisset
