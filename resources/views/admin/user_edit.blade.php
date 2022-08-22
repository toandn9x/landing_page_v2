@extends('admin.layout.app')
@section('title', 'User edit')
@section('content_admin')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User edit</h1>
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
              <form role="form" method="post" action="{{ route('p_edit_user') }}">
                @csrf
                <table class="table">
                    <tr>
                      <th scope="row">Email(<span style="color: red">*</span>)</th>
                      <td>
                        <div class="form-group">
                          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required name="email" value="{{ $user->email }}">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Password(<span style="color: red">*</span>)</th>
                      <td>
                        <div class="form-group">
                          <input type="password" class="form-control" id="pass" placeholder="Enter password" name="password" minlength="6" value="{{ $user->password }}">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">User name(<span style="color: red">*</span>)</th>
                      <td>
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required value="{{ $user->name }}">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Role</th>
                      <td>
                        <div class="form-group">
                          <select class="form-control" id="" name="role">
                            <option value="0"
                            @if($user->role == 0)
                              selected
                            @endif
                            >Viewer</option>
                            <option value="1"
                            @if($user->role == 1)
                              selected
                            @endif
                            >Admin</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Status</th>
                      <td>
                        <div class="form-group">
                          <select class="form-control" id="" name="status">
                            <option value="1"
                            @if($user->status == 1)
                              selected
                            @endif
                            >✔ Active</option>
                            <option value="0"
                            @if($user->status == 0)
                              selected
                            @endif
                            >✘ Inactive</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><button type="submit" class="btn btn-primary">Submit</button>&emsp;
                      <a href="{{ route('users') }}" class="btn btn-warning">Back</a>
                      </th>
                      <td>
                      </td>
                    </tr>
                </table>
                <input type="hidden" name="id" value="{{ $user->id }}">
                <input type="hidden" name="current_email" value="{{ $user->email }}">
                <input type="hidden" name="current_password" value="{{ $user->password }}">
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
        $("ul li:nth-child(2) > a").addClass("active");
    </script>
@stop
