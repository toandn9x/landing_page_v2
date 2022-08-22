@extends('admin.layout.app')
@section('title', 'Edit Progess & Result')
@section('content_admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Progess & Result</h1>
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
                            <form role="form" method="post" action="{{ route('p_progess') }}" enctype="multipart/form-data">
                                @csrf
                                <table class="table">
                                	<tr>
                                		<td>update_at: </td>
                                		<td>{{ isset($progess->updated_at) ?  $progess->updated_at : ''}}</td>
                                	</tr>
                                    <tr>
                                        <th scope="row">title1</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title1" placeholder="Enter text" name="title1" value="{{ isset($progess->title1) ?  $progess->title1 : ''}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">content1</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="textarea" rows="5" name="content1">{{ isset($progess->content1) ? $progess->content1 : '' }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">img1</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img1">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="images/"><img src="assets/img/{{ isset($progess->img1) ? $progess->img1 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">title2</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title2" placeholder="Enter text" name="title2" value="{{ isset($progess->title2) ? $progess->title2 : '' }}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">img2</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img2">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="images/"><img src="assets/img/{{ isset($progess->img2) ? $progess->img2 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="color: #00bb00">VietNam:</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">title3</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title3" placeholder="Enter text" name="title3" value="{{ isset($progess->title3) ?  $progess->title3 : ''}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">content3</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="2" name="content3">{{ isset($progess->content3) ? $progess->content3 : '' }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">img3</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img3">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="images/"><img src="assets/img/{{ isset($progess->img3) ? $progess->img3 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">title4</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title4" placeholder="Enter text" name="title4" value="{{ isset($progess->title4) ?  $progess->title4 : ''}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">content4</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" name="content4">{{ isset($progess->content4) ? $progess->content4 : '' }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">img4</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img4">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="images/"><img src="assets/img/{{ isset($progess->img4) ? $progess->img4 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<tr>
                                        <th scope="row">img5</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img5">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="assets/img/{{ isset($progess->img5) ? $progess->img5 : '' }}"><img src="assets/img/{{ isset($progess->img5) ? $progess->img5 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<tr>
                                        <th scope="row">img6</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img6">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="images/"><img src="assets/img/{{ isset($progess->img6) ? $progess->img6 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th scope="row">img7</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img7">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="assets/img/{{ isset($progess->img7) ? $progess->img7 : '' }}"><img src="assets/img/{{ isset($progess->img7) ? $progess->img7 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="color: #00bb00">Laos:</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">title8</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title8" placeholder="Enter text" name="title8" value="{{ isset($progess->title8) ?  $progess->title8 : ''}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">content8</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="2" name="content8">{{ isset($progess->content8) ? $progess->content8 : '' }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">img8</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img8">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="images/"><img src="assets/img/{{ isset($progess->img8) ? $progess->img8 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">title9</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title9" placeholder="Enter text" name="title9" value="{{ isset($progess->title9) ?  $progess->title9 : ''}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">img9</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img9">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="images/"><img src="assets/img/{{ isset($progess->img9) ? $progess->img9 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th scope="row">content9</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" name="content9">{{ isset($progess->content9) ? $progess->content9 : '' }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">img10</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img10">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="images/"><img src="assets/img/{{ isset($progess->img10) ? $progess->img10 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">img11</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "img11">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="images/"><img src="assets/img/{{ isset($progess->img11) ? $progess->img11 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	@if(Auth::user()->role == 1)
                                        <td><button type="submit" class="btn btn-primary">Submit</button></td>
                                        @endif
                                        <td><a href="{{ route('index') }}" class="btn btn-warning">Back</a></td>
                                    </tr>
                                </table>
                      
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
        $("ul li:nth-child(5) > a").addClass("active");
    </script>
@stop
