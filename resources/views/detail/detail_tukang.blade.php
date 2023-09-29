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
                <form action="{{ route('acc') }}" method="post">
                    @csrf
                {{-- {{dd($tkg)}} --}}
                <tr>
                    <td><b>User Id</b></td>
                    <td>:</td>
                    <td>{{ $tkg->id }}</td>
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td>:</td>
                    <td>{{ $tkg->name }}</td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>:</td>
                    <td>{{ $tkg->alamat }}</td>
                </tr>
                <tr>
                    <td><b>Handphone</b></td>
                    <td>:</td>
                    <td>{{ $tkg->handphone }}</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>:</td>
                    <td>{{ $tkg->email }}</td>
                </tr>
                <tr>
                    <td><b>NIK</b></td>
                    <td>:</td>
                    <td>{{ $tkg->nik }}</td>
                </tr>
                <tr>
                    <td><b>Keahlian</b></td>
                    <td>:</td>
                    <td>{{ $tkg->keahlian }}</td>
                </tr>
                <tr>
                    <td><b>Sertifikat</b></td>
                    <td>:</td>
                    <td><img alt="foto" src="{{asset('/storage/sertifikat/'.$tkg->id.'/'.$tkg->sertifikat)}}" class="img-fluid rounded shadow"></td>
                </tr>
                <tr>
                    <td><b>KTP</b></td>
                    <td>:</td>
                    <td><img alt="foto" src="{{asset('/storage/ktp/'.$tkg->id.'/'.$tkg->ktp)}}" class="img-fluid rounded shadow"></td>
                </tr>
                <tr>
                    <td><a href="/dashboard"><input type="button" class="btn btn-info" value="Kembali"></a></td>
                    <td></td>
                    <td class="text-right">
                        <input type="hidden" value="{{$tkg->id}}" name="u">
                        <input type="hidden" value="1" name="one">
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

</div>
</div>
</div>
@endsection
