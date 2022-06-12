@extends('layout.main')
@section('title')
    <title>Dashboard</title>
@endsection
<!-- Main Start -->
@section('main')
<section class="page-wrapper woocommerce single">
    <div class="container" style="margin-top:150px">
        <div class="row justify-content-center">
            <div class="col-md-12 col-xl-10">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="login-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Welcome to SIAMSI</h2>
                    </div>
                    <div style="margin-left:230px">
                        <a href="tambah_mhs">
                            <button class="btn btn-primary">Tambah Mahasiswa</button>
                        </a>
                        <a href="tambah_matkul">
                            <button class="btn btn-primary">Tambah Mata Kuliah</button>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!--Main end-->



   