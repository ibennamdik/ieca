@extends('backend.posts.layout')

@section('post-content')

<div class="content-heading">
    <div class="dropdown float-right">
        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-drop"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Today
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-drop">
            <a class="dropdown-item active" href="javascript:void(0)">
                <i class="fa fa-fw fa-calendar mr-5"></i>Today
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-calendar mr-5"></i>This Week
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-calendar mr-5"></i>This Month
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-calendar mr-5"></i>This Year
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
            </a>
        </div>
    </div>
    <div class="dropdown float-right mr-5">
        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-filter-drop"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            All
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-filter-drop">
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-spinner fa-spin text-warning mr-5"></i>Pending
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-refresh fa-spin text-info mr-5"></i>Processing
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger mr-5"></i>Canceled
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-check text-success mr-5"></i>Completed
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item active" href="javascript:void(0)">
                <i class="fa fa-fw fa-circle-o mr-5"></i>All
            </a>
        </div>
    </div>
    Posts ({{ $posts->count() }})
</div>
<div class="block">
    <div class="block-content block-content-full">

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">ID</th>
                        <th class="">Submitted</th>
                        <th class="">Author</th>
                        <th class="d-none d-sm-table-cell">Category</th>
                        <th class="">Post</th>
                        <th class="d-none d-sm-table-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td class="d-none d-sm-table-cell">
                            <a class="font-w600" href="#">{{ $post->id }}</a>
                        </td>

                        <td class="">
                            {{ $post->created_at->toDayDateTimeString() }}
                        </td>

                        <td class="">
                            {{ $post->author }}
                        </td>

                        <td class="d-none d-sm-table-cell">
                            {{ $post->postCategory->name }}
                        </td>

                        <td class="">
                            <a href="#" data-toggle="modal" data-target="#modal-post{{ $post->id }}"
                                class="btn btn-alt-primary">View details</a>
                        </td>

                        <td class="d-none d-sm-table-cell">
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">

                                @csrf
                                @method('DELETE')
                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-success"
                                    data-toggle="tooltip" title="Update">
                                    <i class="fa fa-edit"></i>
                                </a>
                                {{-- <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-popin{{ $v->id }}">View
                                Details</button> --}}
                                <button type="submit" class="btn btn-sm btn-danger" title="trash">
                                    <i class="fa fa-trash"></i>
                                </button>

                            </form>
                        </td>
                    </tr>
                    <div class="modal fade" id="modal-post{{ $post->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-post{{ $post->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popin" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Post Details</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal"
                                                aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group row">
                                            <label class="col-12" for="topic">Topic</label>
                                            <div class="col-12">
                                                <textarea class="form-control" id="topic" name="topic"
                                                    placeholder="Post topic" rows="2" maxlength=""
                                                    readonly>{{ $post->topic }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="body">Body</label>
                                            <div class="col-12">
                                                <textarea class="form-control" id="body" name="body"
                                                    placeholder="Post Body" rows="10" maxlength=""
                                                    readonly>{!! $post->body !!}</textarea>
                                            </div>
                                        </div>

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

        <!-- END Products Table -->

        <!-- Navigation -->
        <!-- END Navigation -->
    </div>
</div>

@endsection
