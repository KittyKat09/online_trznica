@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/receipt.css') }}" />

<div class="receipt-content">
    <div class="container bootstrap snippets bootdey">
		<div class="row">
			<div class="col-md-12">
				<div class="invoice-wrapper">
					<div class="intro">
						Hi <strong>John McClane</strong>,
						<br>
						This is the receipt for a payment of <strong>$312.00</strong> (USD) for your works
					</div>

					<div class="payment-info">
						<div class="row">
							<div class="col-sm-6">
								<span>Identifikacijski br. narudžbe:</span>
								<strong>{{$order->id}}</strong>
							</div>
							<div class="col-sm-6 text-right">
								<span>Payment Date</span>
								<strong>Jul 09, 2014 - 12:20 pm</strong>
							</div>
						</div>
					</div>

					<div class="payment-details">
						<div class="row">
							<div class="col-sm-6">
								<span>Primatelj:</span>
								<strong>
									Andres felipe posada
								</strong>
								<p>
									{{$order->address}} <br>
									{{$order->postcode}}, {{$order->city}} <br>
									Kontakt: {{$order->phone}} <br>
									<a href="#">
										jonnydeff@gmail.com
									</a>
								</p>
							</div>
							<div class="col-sm-6 text-right">
								<span>Pošiljatelj:</span>
								<strong>
									Moja tržnica
								</strong>
								<p>
									Vukovarska 58 <br>
									51 000, <br>
									Rijeka <br>
									<a href="#">
										moja.trznica@gmail.com
									</a>
								</p>
							</div>
						</div>
					</div>

					<div class="line-items">
						<div class="headers clearfix">
							<div class="row">
								<div class="col-xs-4">ID</div>
								<div class="col-xs-3">Naziv</div>
								<div class="col-xs-5 text-right">Količina</div>
							</div>
						</div>

                        @foreach (json_decode($order->content) as $content)
						<div class="items">
							<div class="row item">
								<div class="col-xs-4 desc">
									{{$content[0]}}
								</div>
								<div class="col-xs-3 qty">
									{{$content[1]}}
								</div>
								<div class="col-xs-5 amount text-right">
									{{$content[2]}}
								</div>
							</div>
						</div>
                        @endforeach


						<div class="total text-right">
							<p class="extra-notes">
								<strong>Napomena:</strong>
								{{$order->notes}}
							</p>
							<div class="field">
								Subtotal <span>$379.00</span>
							</div>
							<div class="field">
								Shipping <span>$0.00</span>
							</div>
							<div class="field">
								Discount <span>4.5%</span>
							</div>
							<div class="field grand-total">
								Total <span>{{$order->total}}</span>
							</div>
						</div>

						<div class="print">
							<a href="#">
								<i class="fa fa-print"></i>
								Print this receipt
							</a>
						</div>
					</div>
				</div>

				<div class="footer">
					Copyright © 2014. company name
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
