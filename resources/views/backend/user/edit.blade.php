@extends('backend.layout')
@section('title','Kullanıcı Düzenle | Admin')
@section('content')


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kullanıcı Düzenle</h4>
                    <form class="forms-sample" action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @CSRF
                        @method('put')
                        <div class="form-group">
                            <label>Profil Fotoğrafı</label>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="user_file">
                                <span class="input-group-append">
                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">İsim ve Soyisim</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="name" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">e-Posta Adresi</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Şifre</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Kayıt Et</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css') @endsection
@section('js') @endsection
