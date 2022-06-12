@extends('layout.main')
@section('title')
    <title>Edit Mahasiswa</title>
@endsection
@section('main')
<!-- About Section Start -->
<section class="about-3 section-padding">
    <div class="container">
        
    </div>
</section>
<!-- About Section END -->


<!-- Counter Section start -->
<section class="counter-section4">
    <div class="container">
        <div class="row justify-content-center" >

            <div class="woocommerce-notices-wrapper"></div>
                <div class="login-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Form</h2>
                    </div>
                    @php
                        
                    @endphp
                    <form class="woocommerce-form" method="post" action="{{route('mahasiswa.update',$maha->id)}}">
                        @csrf
                        @method('PUT')
                        
                       <div class="woocommerce-billing-fields__field-wrapper">

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="nama">Nama&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="nama" id="nama" autocomplete="nama" value="{{old('nama')}}" placeholder="Nama">
                        </p>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="nim">NIM&nbsp;<span class="required">*</span></label>
                            <input type="text" class="input-text form-control input-lg" name="nim" id="nim" autocomplete="nim" value="{{old('nim')}}" placeholder="NIM">
                        </p>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="prodi">Prodi&nbsp;<span class="required">*</span></label>
                            <input type="text" class="input-text form-control input-lg" name="prodi" id="prodi" autocomplete="prodi" value="{{old('prodi')}}" placeholder="Prodi">
                        </p>

                    </div>
    
                       <p class="form-row">
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a414dce984"><input type="hidden" name="_wp_http_referer" value="">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Edit</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COunter Section End -->

<br>
<br>
@endsection