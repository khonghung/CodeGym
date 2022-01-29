@extends('layouts.app')
@section('title', 'Cập nhật phiếu mượn sách'),
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cập nhật phiếu mượn</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="" method="post">

                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa fa-search"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="search-student-borrow"
                                                    placeholder="Thay đổi tên học sinh, mã học sinh">

                                            </div>
                                            <ul id="list-student-borrow-search" style="position: absolute;z-index: 1000"
                                                class="list-group"></ul>
                                        </div>
                                        <div class="form-group">
                                            <h6>Thay đổi người mượn</h6>
                                            <hr>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-4 col-form-label">Thay đổi tên học
                                                    viên</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $borrow->student->name }}" id="name-student-borrow"
                                                        disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ $borrow->student->email }}" id="email-student-borrow"
                                                        disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="phone"
                                                        value="{{ $borrow->student->phone }}" id="phone-student-borrow"
                                                        disabled>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">

                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa fa-search"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="search-book-borrow"
                                                    placeholder="Thay đổi tên sách">
                                            </div>
                                            <ul id="list-book-borrow-search" style="position: absolute;z-index: 1000"
                                                class="list-group"></ul>
                                        </div>
                                        <div class="form-group">
                                            <h6>Thay đổi danh sách sách</h6>
                                            <hr>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>STT</td>
                                                        <td>Tên sách</td>
                                                        <td>Hình ảnh</td>
                                                        <td>Trạng thái</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="book-item">
                                                        <td></td>
                                                        <td>{{ $borrow->book->name }}</td>
                                                        <td>
                                                            <img src="{{asset('storage/'.$borrow->book->image)}}" alt="" width="100px">
                                                        </td>
                                                        <td>{{ $borrow->book->status }}</td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>Thay đổi thông tin phiếu mượn</h6>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group row">
                                                <label for="borrow_date" class="col-sm-4 col-form-label">Ngày
                                                    mượn</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" name="borrow_date" value="{{$borrow->borrow_date}}"
                                                        id="borrow_date">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="borrow_return" class="col-sm-4 col-form-label">Ngày
                                                    trả</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" name="borrow_return" value="{{$borrow->borrow_return}}"
                                                        id="borrow_return">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="borrow_return" class="col-sm-4 col-form-label">Trạng thái</label>
                                                <div class="col-sm-8">
                                                    <select name="status" id="">
                                                        <option value="Đang mượn">Đang mượn</option>
                                                        <option value="Đã trả">Đã trả</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-12 col-md-6"> 
                                            <div class="form-group">
                                                <button class="btn btn-success" type="submit" >Cập nhật</button>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" id="student-id" name="student_id" value="{{ $borrow->student_id }}" hidden>
                                    <input type="text" id="book-id" name="book_id" value="{{ $borrow->book_id }}" style="display:none">
                                         
                                </div>
                            </div>
                        </form>
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
@endsection
