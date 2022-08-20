@extends('admin.layout.app')
@section('title', 'sportlight edit')
@section('content_admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>sportlight edit</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-primary">
                            {{-- check lỗi validate --}}
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            {{-- check lỗi không lưu được bản ghi trong DB --}}
                            @if (session('err'))
                                <div class="alert alert-danger">
                                    {{ session('err') }}
                                </div>
                            @endif
                            {{-- in thông báo lưu thành công ! --}}
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form role="form" method="post" action="{{ route('p_edit_sportlight') }}" enctype="multipart/form-data">
                                @csrf
                                <table class="table">
                                    <tr>
                                        <th scope="row">img</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <p><b>old img: </b></p><br>
                                            @if($sportlight->img)
                                                <a href="assets/img/{{ $sportlight->img }}"><img src="assets/img/{{ $sportlight->img }}" style="width: 100px; cursor: pointer"></a>
                                            @endif
                                            <hr>
                                            <p>Delete? <input type="checkbox" value="1" name="delete"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">description</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" name="description">{{ $sportlight->description }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">content</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="textarea" rows="5" name="content">{{ $sportlight->content }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">status</th>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control" id="" name="status">
                                                    <option value="1"
                                                    @if($sportlight->status == 1) selected
                                                            @endif
                                                    >Active</option>
                                                    <option value="0"
                                                    @if($sportlight->status == 0) selected
                                                            @endif
                                                    >Inactive</option>
                                                </select>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td><button type="submit" class="btn btn-primary">Submit</button></td>
                                    	<td><a href="{{ route('sportlight') }}" class="btn btn-warning">Back</a></td>
                                    </tr>
                                </table>
                                <input type="hidden" name="id" value="{{ $sportlight->id }}">
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </section>
    </div>
    <!-- /.content -->
@stop
@section('script')
    <script>
        $("ul li:nth-child(4) > a").addClass("active");
    </script>
@stop
