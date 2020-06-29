<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Produk - Soal Tes</title>

        <!-- bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>

        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card shadow my-5">
            <div class="card-header">
                Edit Produk 
                | <a href="{{ url('/') }}" class="btn btn-sm btn-outline-info">Home</a>
            </div>

            <div class="card-body">

                <form action="{{ route('produk.update', $produk->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                
                  <div class="form-group">
                    <label for="kode_produk">Kode Produk:</label>
                    <input name="kode_produk" value="{{ $produk->kode_produk }}" type="text" class="form-control" placeholder="Masukkan Kode Produk" id="kode_produk">
                  </div>

                  <div class="form-group">
                    <label for="judul_produk">Judul Produk:</label>
                    <input name="judul_produk" value="{{ $produk->judul_produk }}" type="text" class="form-control" placeholder="Masukkan judul Produk" id="judul_produk">
                  </div>

                  <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input name="harga" value="{{ $produk->harga }}" type="text" class="form-control" placeholder="Masukkan Harga" id="harga">
                  </div>

                  <div class="form-group">
                    <label for="link_produk">Link Produk:</label>
                    <input name="link_produk" value="{{ $produk->link_produk }}" type="text" class="form-control" placeholder="Masukkan link Produk" id="link_produk">
                  </div>

                  <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <input name="kategori" value="{{ $produk->kategori }}" type="text" class="form-control" placeholder="Masukkan kategori" id="kategori">
                  </div>
                  
                   <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                   | <a href="{{ url('/produk') }}" class="btn btn-sm btn-outline-info">Batal</a>
                   
                </form>
                
            <!-- c body end -->
            </div>
            <!-- card end-->
            </div>
            <!-- col md 12 end -->
            </div>
            <!-- row wnd -->
            </div>
            <!-- cont end-->
        </div> 
    </body>
</html>






