@extends('admin.layout.app')
@section('title', 'Edit Overview')
@section('content_admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Overview</h1>
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
                            <form role="form" method="post" action="{{ route('p_overview') }}" enctype="multipart/form-data">
                                @csrf
                                <table class="table">
                                	<tr>
                                		<td>update_at: </td>
                                		<td>{{ isset($post->updated_at) ?  $post->updated_at : ''}}</td>
                                	</tr>
                                    <tr>
                                        <th scope="row">title1</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title1" placeholder="Enter text" name="title1" value="{{ isset($post->title1) ?  $post->title1 : ''}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">content1</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="textarea" rows="5" name="content1">{{ isset($post->content1) ? $post->content1 : '' }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">title2</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title2" placeholder="Enter text" name="title2" value="{{ isset($post->title2) ? $post->title2 : '' }}">
                                            </div>
                                        </td>
                                    </tr>
<!--                                     <tr>
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
                                            <a href="images/"><img src="assets/img/{{ isset($post->img5) ? $post->img5 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <th scope="row">content2</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="textarea" rows="5" name="content2">{{ isset($post->content2) ? $post->content2 : '' }}</textarea>
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
                                            <a href="images/"><img src="assets/img/{{ isset($post->img1) ? $post->img1 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">text img1</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="2" name="text_img1">{{ isset($post->text_img1) ? $post->text_img1 : '' }}</textarea>
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
                                            <a href="images/"><img src="assets/img/{{ isset($post->img2) ? $post->img2 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">text img2</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="2" name="text_img2">{{ isset($post->text_img2) ? $post->text_img2 : '' }}</textarea>
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
                                            <a href="images/"><img src="assets/img/{{ isset($post->img3) ? $post->img3 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">text img3</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="2" name="text_img3">{{ isset($post->text_img3) ? $post->text_img3 : '' }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
	                                    <th scope="row">link video</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title1" placeholder="Enter text" name="link" value="{{ isset($post->link) ? $post->link : '' }}">
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
                                            <a href="images/"><img src="assets/img/{{ isset($post->img4) ? $post->img4 : '' }}" style="width: 100px; cursor: pointer"></a>
                                        </td>
                                    </tr>
	                                <tr>
                                        <th scope="row">title3</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title3" placeholder="Enter text" name="title3" value="{{ isset($post->title3) ? $post->title3 : '' }}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">content3</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="textarea" rows="5" name="content3">{{ isset($post->content3) ? $post->content3 : '' }}</textarea>
                                            </div>
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
        $("ul li:nth-child(4) > a").addClass("active");
    </script>
@stop
