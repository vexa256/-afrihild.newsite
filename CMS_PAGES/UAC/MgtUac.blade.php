<!--begin::Card body-->
<div class="card-body pt-3 bg-light shadow-lg table-responsive">
    {!! Alert(
        $icon = 'fa-info',
        $class = 'alert-primary',
        $Title = 'AfriChild UAC',
        $Msg = 'Manage AfriChild Website CMS Users',
    ) !!}
</div>
<div class="card-body pt-3 bg-light shadow-lg table-responsive">
    {{ HeaderBtn($Toggle = 'New', $Class = 'btn-danger', $Label = 'New User Account ', $Icon = 'fa-plus') }}
    <table class="mytable table table-rounded table-bordered border gy-3 gs-3">
        <thead>
            <tr class="fw-bold text-gray-800 border-bottom border-gray-200">
                <th>Name</th>
                <th>Email</th>

                <th>Update</th>
                <th class="bg-dark text-light">Delete</th>
            </tr>
        </thead>
        <tbody>
            @isset($DatabaseData)
                @foreach ($DatabaseData as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>

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
                                        'TableName' => 'users',
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
@include('UAC.New')

@isset($DatabaseData)
    @foreach ($DatabaseData as $up)
        {{ UpdateModalHeader($Title = 'Update the selected record', $ModalID = $up->id) }}
        <form action="{{ route('UpdateUser') }}" class="" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3 mt-3">
                    <div class="mb-3">
                        <label class="required form-label">Password</label>
                        <input required="" type="password" name="password"
                            class="form-control" placeholder="">
                    </div>
                </div>

                <div class="col-md-6 mb-3 mt-3">
                    <div class="mb-3">
                        <label class="required form-label">Confirm Password</label>
                        <input required="" type="password"
                            name="password_confirmation" class="form-control"
                            placeholder="">
                    </div>
                </div>

                <input type="hidden" name="id" value="{{ $up->id }}">
                <input type="hidden" name="TableName" value="users">
                {{ RunUpdateModalFinal($ModalID = $up->id, $Extra = '', $csrf = null, $Title = null, $RecordID = $up->id, $col = '6', $te = '12', $TableName = 'users') }}
            </div>
            {{ _UpdateModalFooter() }}
        </form>
    @endforeach
@endisset
