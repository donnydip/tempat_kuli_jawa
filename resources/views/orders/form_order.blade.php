@extends('layouts.base_order')
@section('title','Order || Tempatnya Kuli Jawa')
@section('order')

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizard">
		                @foreach ($show as $shw)
                            <form action="{{ route('order') }}" method="post">
                                @csrf
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title" style="color: black">
		                        		Pesan Tukang
		                        	</h3>
									<h5>Isi form ini untuk memesan layanan TKJ.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Buat Pesanan</a></li>
			                            <li><a href="#captain" data-toggle="tab">Pembayaran</a></li>
			                            <li><a href="#description" data-toggle="tab">Detail</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Tuliskan Pesanan Anda</h4>
			                            	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
			                                          	<input class="form-control datepicker" placeholder="Tanggal Mulai" type="text" name="tanggal_mulai" id="tanggal">
                                                          <script type="text/javascript">
                                                            $('.datepicker').datepicker({
                                                                weekStart:1,
                                                                color: 'red'
                                                            });
                                                           </script>
                                                        <input class="form-control datepicker" placeholder="Tanggal Akhir" type="text" name="tanggal_akhir" id="tanggal">
                                                        <script type="text/javascript">
                                                            $('.datepicker').datepicker({
                                                                weekStart:1,
                                                                color: 'red'
                                                            });
                                                           </script>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <h6>Sertifikasi</h6>
                                                        <h6 class="form-control">{{ $shw->sertifikat }}</h6>
                                                    </div>
												</div>

		                                	</div>
		                                	<div class="col-sm-6">
		                                    	<div class="form-group label-floating">
                                                    <h6>Nama Tukang</h6>
                                                    <h6 class="form-control">{{ $shw->name }}</h6>
                                                    <input type="hidden" value="{{$shw->id}}" name="tukang_id">
                                                    <input type="hidden" value="{{$shw->name}}" name="nama_tukang">
		                                    	</div>
												<div class="form-group label-floating">
		                                        	<h6>Keahlian</h6>
                                                    <h6 class="form-control">{{ $shw->keahlian }}</h6>
                                                    <input type="hidden" value="{{$shw->keahlian}}" name="jenis_keahlian">
		                                    	</div>
                                                <div class="form-group label-floating">
		                                        	<h6>Biaya/Hari</h6>
                                                    <h6 class="form-control">100.000</h6>
                                                    <input type="hidden" value="100000" name="biaya">
		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="captain">
		                                <h4 class="info-text">Pilih Metode Pembayaran Anda</h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-12">
		                                                <select class="form-control" name="status_pembayaran">
                                                            <option selected>Pilih Metode Pembayaran</option>
                                                            <option value="Bank Transfer">Bank Transfer</option>
                                                            <option value="OVO">OVO</option>
                                                            <option value="Bayar di Tempat">Bayar di Tempat</option>
                                                          </select>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text"> Berikan kami tentang detail anda.</h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
	                                    		<div class="form-group">
		                                            <label>Detail Masalah</label>
		                                            <textarea class="form-control" placeholder="" name="detail_order" rows="6"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-6 col-sm-offset-1">
	                                    		<div class="form-group">
		                                            <label>Detail Alamat</label>
		                                            <textarea class="form-control" placeholder="" name="detail_alamat" rows="6"></textarea>
		                                        </div>
		                                </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
                                        <input type="hidden" value="Pesanan Dibuat" name="status">
	                                    <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Next' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-info btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
                            @endforeach
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

@endsection
