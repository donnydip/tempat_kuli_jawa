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
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title" style="color: black">
		                        		Pesan Tukang
		                        	</h3>
									<h5>INVOICE</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Rincian Pesanan Anda</a></li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text">{{Auth::user()->name}}</h4>
			                            	</div>
		                                	<div class="col-sm-6">
												<div class="form-group label-floating">
                                                    <h6>Order ID</h6>
                                                    <h6 class="form-control">{{ $detail->orders_id }}</h6>
		                                    	</div>
                                                <div class="form-group label-floating">
                                                    <h6>Tanggal Mulai</h6>
                                                    <h6 class="form-control">{{ $detail->tanggal_mulai }}</h6>
		                                    	</div>
                                                <div class="form-group label-floating">
                                                    <h6>Tanggal Selesai</h6>
                                                    <h6 class="form-control">{{ $detail->tanggal_akhir }}</h6>
		                                    	</div>
                                                <div class="form-group label-floating">
                                                    <h6>Total Hari</h6>
                                                    <h6 class="form-control">{{ $detail->total_hari }}</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
		                                    	<div class="form-group label-floating">
                                                    <h6>Nama Tukang</h6>
                                                    <h6 class="form-control">{{ $detail->nama_tukang }}</h6>
		                                    	</div>
												<div class="form-group label-floating">
		                                        	<h6>Keahlian</h6>
                                                    <h6 class="form-control">{{ $detail->jenis_keahlian }}</h6>
		                                    	</div>
                                                <div class="form-group label-floating">
		                                        	<h6>Biaya/Hari</h6>
                                                    <h6 class="form-control">100.000</h6>
		                                    	</div>
                                                <div class="form-group label-floating">
		                                        	<h6>Total Biaya</h6>
                                                    <h6 class="form-control">{{ $detail->total_biaya }}</h6>
		                                    	</div>

		                                	</div>
		                            	</div>
		                            </div>
		                        </div>

	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <a href='/userhome' ><input type='submit' class='btn btn-finish btn-fill btn-info btn-wd' name='finish' value='Konfirmasi' /></a>
	                                </div>
	                                {{-- <div class="pull-left">
	                                    <input type='button' class='btn btn-info' name='previous' value='Previous' />
	                                </div> --}}
	                                <div class="clearfix"></div>
	                        	</div>


		                </div>
		            </div> <!-- wizard container -->

		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

@endsection
