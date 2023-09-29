@extends('layouts.base')
@section('title','TKJ')
@section('menuHome','active')
@section('home')

<div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-4 order-xl-2">
        <div class="card card-profile">
          <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <a href="#">
                  <img src="{{asset('/storage/foto/'.Auth::user()->id.'/'.Auth::user()->foto)}}" class="rounded-circle">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            <div class="d-flex justify-content-between">
              <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
              <a href="#" class="btn btn-sm btn-default float-right">Message</a>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col">
                <div class="card-profile-stats d-flex justify-content-center">
                  <div>
                    <span class="heading">22</span>
                    <span class="description">Friends</span>
                  </div>
                  <div>
                    <span class="heading">10</span>
                    <span class="description">Photos</span>
                  </div>
                  <div>
                    <span class="heading">89</span>
                    <span class="description">Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <h5 class="h3" style="color: black">
                {{ Auth::user()->name }}
              </h5>
              <div class="h5 mt-4" style="color: black">
                <i class="ni business_briefcase-24 mr-2" ></i> {{ Auth::user()->keahlian }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="display-3" style="color: black">Pesanan Masuk</h3>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Order ID</th>
                <th scope="col">ID Pelanggan</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Total Biaya</th>
                <th scope="col">Status</th>
                <th scope="col">Status Pembayaran</th>
                <th scope="col">Completion</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
        @foreach ($tukang as $tkg)
        <form action="{{ route('detailorder') }}" method="post">
            @csrf
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">{{ $tkg->orders_id }}</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                {{ $tkg->user_id }}
                </td>
                <td>
                    {{ $tkg->tanggal_mulai }}
                </td>
                <td>
                    {{ $tkg->total_biaya }}
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">{{ $tkg->status }}</span>
                      </span>
                </td>
                <td>
                    {{ $tkg->status_pembayaran }}
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <input type="hidden" value="{{$tkg->orders_id}}" name="order_id">
                        <input type="submit" class="dropdown-item" value="Detail" name="detail">
                    </div>
                  </div>
                </td>
              </tr>
            </form>
        @endforeach
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
                {{ $tukang->links('pagination::bootstrap-4') }}
                <a href="/userhome"><input type="button" class="btn btn-info" value="Kembali"></a>
            </ul>
          </nav>
        </div>
      </div>
    </div>
</div>

@endsection
