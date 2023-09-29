@extends('layouts.base')
@section('title','Detail Order')
@section('menuDetail','active')
@section('home')

<div class="card">
    <!-- Card header -->
    <div class="card-header border-0">
      <h3 class="display-3" style="color: black">Detail Pesanan</h3>
    </div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                @foreach ($tukang as $tkg)
                <form action="{{ route('detailorder') }}" method="post">
                    @csrf
                <tr>
                    <td><b>Order Id</b></td>
                    <td>:</td>
                    <td>{{ $tkg->orders_id }}</td>
                </tr>
                <tr>
                    <td><b>Id Pelanggan</b></td>
                    <td>:</td>
                    <td>{{ $tkg->id }}</td>
                </tr>
                <tr>
                    <td><b>Total Hari</b></td>
                    <td>:</td>
                    <td>{{ $tkg->total_hari }}</td>
                </tr>
                <tr>
                    <td><b>Total Biaya</b></td>
                    <td>:</td>
                    <td>{{ $tkg->total_biaya }}</td>
                </tr>
                <tr>
                    <td><b>Tanggal Mulai</b></td>
                    <td>:</td>
                    <td>{{ $tkg->tanggal_mulai }}</td>
                </tr>
                <tr>
                    <td><b>Tanggal Akhir</b></td>
                    <td>:</td>
                    <td>{{ $tkg->tanggal_akhir }}</td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td>:</td>
                    <td>{{ $tkg->status }}</td>
                </tr>
                <tr>
                    <td><b>Status Pembayaran</b></td>
                    <td>:</td>
                    <td>{{ $tkg->status_pembayaran }}</td>
                </tr>
                <tr>
                    <td><b>Detail Order</b></td>
                    <td>:</td>
                    <td>{{ $tkg->detail_order }}</td>
                </tr>
                <tr>
                    <td><b>Detail Alamat</b></td>
                    <td>:</td>
                    <td>{{ $tkg->detail_alamat }}</td>
                </tr>
                <tr>
                    <td><a href="/tukang"><input type="button" class="btn btn-info" value="Kembali"></a></td>
                    <td></td>
                    <td class="text-right">
                        <input type="hidden" value="{{$tkg->orders_id}}" name="order_id">
                        <input type="submit" class="btn btn-danger" value="Tolak" name="tolak">
                        <input type="submit" class="btn btn-success" value="Terima" name="terima">
                    </td>
                </tr>
            </form>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</div>

<div class="card-footer py-4">
    <nav aria-label="...">
      <ul class="pagination justify-content-end mb-0">
          {{ $tukang->links('pagination::bootstrap-4') }}
      </ul>
    </nav>
  </div>
</div>
</div>
</div>
@endsection
