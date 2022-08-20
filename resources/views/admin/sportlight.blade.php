@extends('admin.layout.app')
@section('title', 'Sportlights')
<style>
    .table > tbody > tr > td {
        vertical-align: middle;
    }

    .table > tbody > tr > th {
        vertical-align: middle;
    }
</style>
@section('content_admin')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sportlights</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-sm-12">
                                    @if(Auth::user()->role == 1)
                                    <a href="{{ route('add_sportlight') }}" class="btn btn-info" style="margin-left: 15px">Add</a> |
                                    <!-- <a href="#" class="btn btn-warning">Xuất excel</a> | -->
                                    <a href="javascript:void(0)" class="btn btn-danger" style="" id="content_delete">Delete</a>
                                    @endif
                                    <!-- SEARCH FORM -->
                                    <form class="form-inline ml-3 float-right" style="padding-top: 10px; padding-left: 0px!important">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control form-control-navbar" type="search"
                                                   placeholder="Search" aria-label="Search" id="content_search">
                                        </div>
                                        <div class="input-group input-group-sm">
                                            <select class="form-control" id="content_status">
                                                <option value="">--Status--</option>
                                                <option value="1" style="font-weight: bold!important">Active</option>
                                                <option value="0" style="font-weight: bold!important">Inactive</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">STT</th>
                                        <th scope="col">img</th>
                                        <th scope="col">description</th>
                                        <th scope="col">content</th>
                                        <th scope="col">status</th>
                                        <th scope="col">created_at</th>
                                        <th scope="col">updated_at</th>
                                        <th scope="col">manipulation</th>
                                    </tr>
                                    </thead>
                                    <tbody id="content_table">
                                    @foreach ($sportlight as $key => $content)
                                        <tr>
                                            <th>
                                                <input class="form-check-input" type="checkbox" value="{{ $content->id }}" id="{{ $content->id }}" style="margin-top: -5px">
                                            </th>
                                            <th scope="row">{{ $key+1 }}</th>
                                            <td>
                                                @if($content->img)
                                                    <a href="assets/img/{{ $content->img }}"><img src="assets/img/{{ $content->img }}" style="width: 100px; cursor: pointer"></a>
                                                @endif
                                            </td>
                                            <td>{!! mb_strimwidth($content->description, 0, 50, "...") !!}</td>
                                            <td>{!! mb_strimwidth($content->content, 0, 150, "...") !!}</td>
                                            @if ($content->status == 1)
                                                <td>✔ Active</td>
                                            @else
                                                <td><span style="color:red">✘ Inactive</span></td>
                                            @endif
                                            <td>{{ $content->created_at }}</td>
                                            <td>{{ $content->updated_at }}</td>
                                            <td>
                                                @if(Auth::user()->role == 1)
                                                <a href="{{ route('edit_sportlight', $content->id) }}"><i
                                                            class="fas fa-edit"></i></a> |
                                                <a href="javascript:void(0)"
                                                   onclick="ajaxDeleteSportlight({{ $content->id }})"><i
                                                            class="fas fa-trash"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-4" id="count_content">Show {{ $sportlight->count() }}
                                        of {{ $sportlight->total() }} result
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="pagination float-right">
                                            {{-- Nguyên tắc : (currentPage - 1) * LIMIT --}}
                                            <li class="page-item"><a class="page-link" href="admin/sportlight?page=1">First</a>
                                            </li>
                                            {{-- nếu page hiện tại > page đầu thì hiện nút privew --}}
                                            @if($sportlight->currentPage() > 1)
                                                <li class="page-item"><a class="page-link"
                                                                         href="admin/sportlight?page={{ $sportlight->currentPage() - 1 }}">Previous</a>
                                                </li>
                                            @endif
                                            <li class="page-item active"><a class="page-link"
                                                                            href="admin/sportlight?page={{ $sportlight->currentPage() }}">{{ $sportlight->currentPage() }}</a>
                                            </li>
                                            @if($sportlight->currentPage() < $sportlight->lastPage())
                                                <li class="page-item"><a class="page-link"
                                                                         href="admin/sportlight?page={{ $sportlight->currentPage() + 1 }}">{{ $sportlight->currentPage() + 1 }}</a>
                                                </li>
                                                @if($sportlight->currentPage() < $sportlight->lastPage() - 2)
                                                    <li class="page-item"><a class="page-link"
                                                                             href="admin/sportlight?page={{ $sportlight->currentPage() + 2 }}">{{ $sportlight->currentPage() + 2 }}</a>
                                                    </li>
                                                @endif
                                                @if($sportlight->currentPage() < $sportlight->lastPage() - 3)
                                                    <li class="page-item"><a class="page-link"
                                                                             href="admin/sportlight?page={{ $sportlight->currentPage() + 3 }}">{{ $sportlight->currentPage() + 3 }}</a>
                                                    </li>
                                                @endif
                                            @endif
                                            {{-- nếu page hiện tại < page cuối thì hiện nút next --}}
                                            @if($sportlight->currentPage() < $sportlight->lastPage())
                                                <li class="page-item"><a class="page-link"
                                                                         href="admin/sportlight?page={{ $sportlight->currentPage() + 1 }}">Next</a>
                                            @endif
                                            <li class="page-item"><a class="page-link"
                                                                     href="admin/sportlight?page={{ $sportlight->lastPage() }}">Last</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
@section('script')
    <script>
        $(document).ready(function () {
            // ajax tìm kiếm
            $('#content_search').on('keyup', function () {
                load_ajax();
            })
            $('#content_status').on('change', function () {
                load_ajax();
            })
            $('#id_menu').on('change', function () {
                load_ajax();
            })

            function load_ajax() {
                $.ajax({
                    url: '{{ route('search_sportlight') }}',
                    type: 'get',
                    data: {
                        'status': $('#content_status').val(),
                        'key': $('#content_search').val(),
                        'id_menu': $('#id_menu').val()
                    },
                    success: function (data) {
                        console.log(data);
                        $('tbody').html(data);
                        $('#count_content').html('Tìm thấy <b>' + $('#content_table').find('tr').length + '</b> Kết quả');
                    }
                });
            }
        });
    </script>
    <script>
        // ajax xóa user
        function ajaxDeleteSportlight(id) {
            //alert(id);
            $.confirm({
                title: 'Confirm!',
                content: 'are you sure delete ?',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Ok',
                        btnClass: 'btn-red',
                        action: function () {
                            $.ajax({
                                url: '{{ route('delete_sportlight') }}',
                                type: 'post',
                                data: {
                                    'id': id,
                                },
                                success: function (data) {
                                    if (data == "success") {
                                        toastr.success('delete success!');
                                        setTimeout(function () {
                                            location.reload();
                                        }, 1000);
                                    } else {
                                        toastr.error('delete flase!');
                                    }
                                }
                            });
                        }
                    },
                    close: function () {
                    }
                }
            });
        }
    </script>
    <script>
        // xóa hàng loạt
        $('#content_delete').click(function () {
            let listId = '';
            $.each($("input[type=checkbox]:checked"), function () {
                listId += $(this).val() + ',';
            });
            listId = listId.substring(0, listId.length - 1);
            console.log(listId);
            ajaxDeleteSportlight(listId);
        })
    </script>
    <script>
        function debugBase64(base64URL){
            var win = window.open();
            win.document.write('<iframe src="' + base64URL  + '" frameborder="0" style="border:0; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%;" allowfullscreen></iframe>');
        }
    </script>
    <script>
        $("ul li:nth-child(6) > a").addClass("active");
    </script>
@stop

