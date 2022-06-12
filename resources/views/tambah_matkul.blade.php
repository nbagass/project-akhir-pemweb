@extends('layout.main')
@section('title')
    <title>Tambah Mata Kuliah</title>
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
                    <form class="woocommerce-form" method="post" action="{{route('matakuliah.store')}}">
                       <div class="woocommerce-billing-fields__field-wrapper">
                        @csrf
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="nama_matkul">Nama&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="nama_matkul" id="nama_matkul" autocomplete="nama_matkul" value="" placeholder="nama_matkul">
                        </p>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="kode_matkul">Kode&nbsp;<span class="required">*</span></label>
                            <input type="text" class="input-text form-control input-lg" name="kode_matkul" id="kode_matkul" autocomplete="kode_matkul" value="" placeholder="kode_matkul">
                        </p>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="nama_prodi">Prodi&nbsp;<span class="required">*</span></label>
                            <input type="text" class="input-text form-control input-lg" name="nama_prodi" id="nama_prodi" autocomplete="nama_prodi" value="" placeholder="nama_prodi">
                        </p>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="jumlah_sks">Jumlah SKS&nbsp;<span class="required">*</span></label>
                            <input type="text" class="input-text form-control input-lg" name="jumlah_sks" id="jumlah_sks" autocomplete="jumlah_sks" value="" placeholder="jumlah_sks">
                        </p>

                    </div>
    
                       <p class="form-row">
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a414dce984"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Tambah</button>
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
