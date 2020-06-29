<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Produk - Soal Tes</title>

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
                Daftar Produk ( {{ $produk->count() }} ) 
                | <a href="{{ route('produk.create') }}" class="btn btn-sm btn-outline-info">Update Produk</a> | <a href="{{ url('/') }}" class="btn btn-sm btn-outline-info">Home</a>
            </div>

            <div class="card-body">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Produk</th>
                        <th scope="col">Judul Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Link Produk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($produk->count() == 0)
                        <tr><th>Tidak ada produk</th></tr>
                      @else
                      @foreach($produk as $no => $prdk)
                      <tr>
                        <th scope="row">{{ ++$no }}</th>
                        <td>{{ $prdk->kode_produk }}</td>
                        <td>{{ $prdk->judul_produk }}</td>
                        <td>{{ $prdk->harga }}</td>
                        <td><a target="_blank" href="{{ $prdk->link_produk }}">link</a></td>
                        <td>{{ $prdk->kategori }}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-warning" href="{{ route('produk.edit', $prdk->id) }}">Edit</a>
                            |
                            <form action="{{ route('produk.destroy', $prdk->id) }}" method="POST">
                               @method('DELETE')
                               @csrf
                               <button class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                </table>
                <!-- table end -->
            </div>
            <!-- card body end -->
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






