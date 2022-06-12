@extends('layout.main')
@section('title')
    <title>Mata Kuliah</title>
@endsection

@section('main')
    <!--Mata Kuliah Start-->
    <section class="woocommerce single page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-12">
                    <div class="header-btn d-none d-xl-block">
                        <a href="tambah_matkul" class="btn btn-main-2 btn-sm-2 rounded">Tambah</a>
                    </div>
                    <br>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="woocommerce-cart">
                        <div class="woocommerce-notices-wrapper"></div>
                        <form class="woocommerce-cart-form" action="" method="">
                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="kode">Kode Mata Kuliah</th>
                                        <th class="matkul">Nama Mata Kuliah</th>
                                        <th class="prodi">Prodi</th>
                                        <th class="sks">Jumlah SKS</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="col-md-12 col-xl-10">
                                    @foreach($data as $item)
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td>{{$item->kode_matkul}}</td>
                                    <td>{{$item->nama_matkul}}</td>
                                    <td>{{$item->nama_prodi}}</td>
                                    <td>{{$item->jumlah_sks}}</td>
                                    <td class="product-subtotal" data-title="Total">
                                        <form action="{{route('matakuliah.edit',$item->id)}}">
                                            <button class="btn btn-primary"type="submit">Edit</button>
                                        </form>

                                        <form action="{{ route('matakuliah.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" class="btn btn-danger">Hapus</button>
                                        </form> 
                                    </td>
                                </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Mata Kuliah end-->
@endsection
