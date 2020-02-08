@extends('backend.roles.layout')

@section('role-content')
<!-- Page Content -->

<div class="content-heading">

    Roles and Permission ({{ $roles->count()}})
</div>
<div class="block">

    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">#</th>
                        <th class="">Levels</th>
                        <th class="d-none d-sm-table-cell">Permission</th>
                        <th class="d-none d-sm-table-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>

                        <td class="d-none d-sm-table-cell">
                            {{ $role->id }}
                        </td>
                        <td class="">
                            {{-- @foreach($admin->getRoleNames() as $v) --}}
                            <label class="badge badge-success">{{ $role->name }}</label>
                            {{-- @endforeach --}}
                        </td>
                        <td class="d-none d-sm-table-cell text-wrap">
                            @if($role->name == "Level 1")
                            <label class="badge badge-info">has all permissions</label>
                            @else
                            @foreach($role->permissions->take(3) as $v)
                            <label class="badge badge-primary">{{ $v->name }}</label>
                            @endforeach
                            <a href="#" class="badge badge-secondary" data-toggle="modal"
                                data-target="#modal-popin{{ $role->id }}">view more</a>
                            @endif
                        </td>
                        <td>


                            <form action="{{ route('admin.roles.destroy', [$role->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <a href="{{ route('admin.roles.edit', $admin)}}" class="btn btn-sm btn-primary"
                                data-toggle="tooltip" title="edit">
                                <i class="fa fa-edit"></i>
                                </a> --}}

                                @if($role->name != "Level 1")
                                @can('manage roles and permissions')
                                <a href="#" class="btn btn-sm btn-success" title="give permission" data-toggle="modal"
                                    data-target="#modal-give{{ $role->id }}">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger" title="revoke permission" data-toggle="modal"
                                    data-target="#modal-revoke{{ $role->id }}">
                                    <i class="fa fa-minus"></i>
                                </a>
                                <button type="submit" class="btn btn-sm btn-danger" title="delete role">
                                    <i class="fa fa-trash"></i>
                                </button>
                                @endcan
                            </form>



                            @endif
                        </td>
                    </tr>
                    <div class="modal fade" id="modal-give{{ $role->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-give{{ $role->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popin" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Add Permission</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal"
                                                aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content">

                                        <form method="POST" action="{{ route('admin.roles.give') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="permission">Select Permission</label>
                                                    <div>
                                                        <select class="js-select2 form-control" id="permission"
                                                            name="permission" style="width: 100%;"
                                                            data-placeholder="Choose one.." required>
                                                            <option></option>
                                                            @foreach ($permissions as $v)
                                                            <option value="{{ $v->id }}">{{ $v->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="role_id" value="{{ $role->id }}">

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-12 text-right">
                                                    <button type="submit" class="btn btn-alt-success">
                                                        <i class="fa fa-check"></i> Add
                                                    </button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary"
                                        data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-revoke{{ $role->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-revoke{{ $role->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popin" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Revoke Permission</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal"
                                                aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content">

                                        <form method="POST" action="{{ route('admin.roles.revoke') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="permission">Select Permission</label>
                                                    <div>
                                                        <select class="js-select2 form-control" id="permission"
                                                            name="permission" style="width: 100%;"
                                                            data-placeholder="Choose one.." required>
                                                            <option></option>
                                                            @foreach ($role->permissions as $v)
                                                            <option value="{{ $v->id }}">{{ $v->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="role_id" value="{{ $role->id }}">

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-12 text-right">
                                                    <button type="submit" class="btn btn-alt-success">
                                                        <i class="fa fa-check"></i> Revoke
                                                    </button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-popin{{ $role->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-popin{{ $role->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popin" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">{{ $role->name }} Permissions</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal"
                                                aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content">

                                        @foreach($role->permissions->chunk(3) as $perm)
                                        <div class="row">
                                            @foreach ($perm as $v)
                                            <div class="col-4">
                                                <label class="badge badge-primary">{{ $v->name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary"
                                        data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
<!-- END Page Content -->
@endsection


@section('css_after')
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">

@endsection

@section('js_after')
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('js/pages/be_tables_datatables.min.js') }}"></script>
@endsection
