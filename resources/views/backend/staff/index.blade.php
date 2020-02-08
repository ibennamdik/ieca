@extends('backend.staff.layout')

@section('staff-content')
<!-- Page Content -->

<div class="content-heading">

    Staff ({{ $admins->count()}})
</div>
<div class="block">

    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">#</th>
                        <th class="">Name</th>
                        <th class="d-none d-sm-table-cell">Phone Number</th>
                        <th class="d-none d-sm-table-cell">Email</th>
                        <th class="d-none d-sm-table-cell">Level</th>
                        <th class="d-none d-sm-table-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                    <tr>

                        <td class="d-none d-sm-table-cell">
                            {{-- <a href="#">{{ $product->brand->name }}</a> --}}
                        </td>
                        <td class="">
                            <a  @if($admin->getRoleNames()->first() != "Level 1") href="{{ route('admin.staff.edit', $admin)}}" @endif>{{ $admin->name }}</a>
                        </td>

                        <td class="d-none d-sm-table-cell">
                            {{ isset($admin->profile) ? $admin->profile->phone_number : null }}
                        </td>

                        <td class="d-none d-sm-table-cell">
                                {{ $admin->email }}
                            </td>
                        <td class="d-none d-sm-table-cell">
                            @foreach($admin->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        </td>

                        <td class="d-none d-sm-table-cell">
                            @if($admin->getRoleNames()->first() != "Level 1")
                            @can('manage roles and permissions')
                            <form action="{{ route('admin.staff.destroy', [$admin->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <a href="{{ route('admin.roles.edit', $admin)}}" class="btn btn-sm btn-primary"
                                data-toggle="tooltip" title="edit">
                                <i class="fa fa-edit"></i>
                                </a> --}}
                                <button type="submit" class="btn btn-sm btn-danger" title="delete admin">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="{{ route('admin.staff.edit', $admin)}}" class="btn btn-sm btn-success" >
                                    <i class="fa fa-edit"></i>
                                </a>
                            </form>

                            @endcan

                            @endif
                        </td>
                    </tr>

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
