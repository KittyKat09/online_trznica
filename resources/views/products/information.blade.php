@extends('layouts.app')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ url('/css/product.css') }}" />

<div class="col-sm-12 col-md-12 col-lg-12">
    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="product-image">
                    <div id="myCarousel-2" class="carousel slide">


            @if ($product->id == 11)
            <img class="card-img-top" src="{{ asset('jabuka-zelena.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 12)
            <img class="card-img-top" src="{{ asset('jagode.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 13)
            <img class="card-img-top" src="{{ asset('jaja.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 14)
            <img class="card-img-top" src="{{ asset('kukuruz.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 15)
            <img class="card-img-top" src="{{ asset('sir.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 16)
            <img class="card-img-top" src="{{ asset('sok-bazga.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 17)
            <img class="card-img-top" src="{{ asset('med.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 18)
            <img class="card-img-top" src="{{ asset('sok-naranca.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 19)
            <img class="card-img-top" src="{{ asset('pastrva.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 20)
            <img class="card-img-top" src="{{ asset('orasi.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 21)
            <img class="card-img-top" src="{{ asset('brasno.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 22)
            <img class="card-img-top" src="{{ asset('spinat.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 23)
            <img class="card-img-top" src="{{ asset('dagnje.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 24)
            <img class="card-img-top" src="{{ asset('rajcica.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 25)
            <img class="card-img-top" src="{{ asset('ulje-maslinovo.jpg') }}" alt="Slika proizvoda.">
            @elseif ($product->id == 26)
            <img class="card-img-top" src="{{ asset('cikla.jpg') }}" alt="Slika proizvoda.">
            @else
            <img class="card-img-top" src="{{ asset('slika.png') }}" alt="Slika proizvoda.">
            @endif


                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <h2 class="name">
                    {{$product->name}}
                    <small></small>
                </h2>
                <hr />
                <h3 class="price-container">
                    {{$product->price}} kn/{{$product->unit}}
                    <small>*uključen PDV</small>
                </h3>
                <div class="certified">
                    <ul>
                        <li>
                            <a href="javascript:void(0);">Dostava<span>3 radna dana</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Odobreno<span>Moja tržnica</span></a>
                        </li>
                    </ul>
                </div>
                <hr />
                <div class="description description-tabs">
                    <ul id="myTab" class="nav nav-pills">
                        <h3>{{$product->description}}</h3>
                        <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin"></a></li>
                        <li class=""><a href="#specifications" data-toggle="tab"></a></li>
                        <li class=""><a href="#reviews" data-toggle="tab"></a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="more-information">
                            <br />
                            <strong>Description Title</strong>
                            <p>
                                Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue
                                sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="specifications">
                            <br />
                            <dl class="">
                                <dt>Gravina</dt>
                                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                <dd>Eget lacinia odio sem nec elit.</dd>
                                <br />

                                <dt>Test lists</dt>
                                <dd>A description list is perfect for defining terms.</dd>
                                <br />

                                <dt>Altra porta</dt>
                                <dd>Vestibulum id ligula porta felis euismod semper</dd>
                            </dl>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <br />
                            <form method="post" class="well padding-bottom-10" onsubmit="return false;">
                                <textarea rows="2" class="form-control" placeholder="Write a review"></textarea>
                                <div class="margin-top-10">
                                    <button type="submit" class="btn btn-sm btn-primary pull-right">
                                        Submit Review
                                    </button>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
                                </div>
                            </form>

                            <div class="chat-body no-padding profile-message">
                                <ul>
                                    <li class="message">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="online" />
                                        <span class="message-text">
                                            <a href="javascript:void(0);" class="username">
                                                Alisha Molly
                                                <span class="badge">Purchase Verified</span>
                                                <span class="pull-right">
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-muted"></i>
                                                </span>
                                            </a>
                                            Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved
                                        </span>
                                        <ul class="list-inline font-xs">
                                            <li>
                                                <a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
                                            </li>
                                            <li class="pull-right">
                                                <small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="message">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="online" />
                                        <span class="message-text">
                                            <a href="javascript:void(0);" class="username">
                                                Aragon Zarko
                                                <span class="badge">Purchase Verified</span>
                                                <span class="pull-right">
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                </span>
                                            </a>
                                            Excellent product, love it!
                                        </span>
                                        <ul class="list-inline font-xs">
                                            <li>
                                                <a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
                                            </li>
                                            <li class="pull-right">
                                                <small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-success btn-lg">Dodaj u košaricu</a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="btn-group pull-right">
                            <button class="btn btn-white btn-default"></button>
                            <button class="btn btn-white btn-default"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product -->
</div>

<footer class="container">
    <p class="float-right"><a href="#">Povratak na vrh</a></p>
    <p>&copy; 2021 Moja tržnica &middot; <a href="#">Kontakt</a> &middot; <a href="#">Služba za korisnike</a></p>
  </footer>

@endsection
