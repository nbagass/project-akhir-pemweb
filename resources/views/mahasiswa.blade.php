@extends('layout.main')
@section('title')
    <title>Mahasiswa</title>
@endsection
    
    @section('main')
    <section class="woocommerce single page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-12">
                    <div class="header-btn d-none d-xl-block">
                        <a href="tambah_mhs" class="btn btn-main-2 btn-sm-2 rounded">Tambah</a>
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
                                        <th class="nama">Nama Mahasiswa</th>
                                        <th class="nim">NIM</th>
                                        <th class="prodi">Program Studi</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <!-- table body -->
                                <tbody class="col-md-12 col-xl-10">
                                @foreach($data as $item)
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->NIM}}</td>
                                    <td>{{$item->prodi}}</td>
                                    <td class="product-subtotal" data-title="Total">
                                        <form action="{{route('mahasiswa.edit',$item->id)}}">
                                            <button class="btn btn-primary"type="submit">Edit</button>
                                        </form>

                                        <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="post">
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
    <!--shop category end-->
@endsection
