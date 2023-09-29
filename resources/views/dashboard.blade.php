@extends('layouts.app.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Pendaftaran Tukang</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Nama Tukang</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($acc as $acs)
                            <form action="{{ route('acc') }}" method="post">
                                @csrf
                                <tr>
                                    <td>{{ $acs->id }}</td>
                                    <td>{{ $acs->name}}</td>
                                    <td>{{ $acs->nik}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <input type="hidden" value="{{$acs->id}}" name="u">
                                            <input type="hidden" value="1" name="one">
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
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
