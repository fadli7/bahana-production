@extends('layouts.admin.app')

@section('header')
	<div class="header bg-primary pb-6">
		<div class="container-fluid">
			<div class="header-body">

				<div class="row align-items-center py-4">
					<div class="col-lg-6 col-7">
						<h6 class="h2 text-white d-inline-block mb-0">Barang</h6>
						<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
							<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
								<li class="breadcrumb-item"><a href="{{ route('landing') }}"><i class="fas fa-home"></i></a></li>
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('productIndex') }}">Barang</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection

@section('content')
	<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="mb-0">Pesan Barang</h3>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('productPostOrder', $product->id) }}">
            {{ csrf_field() }}
            {{-- <h6 class="heading-small text-muted mb-4">Informasi Barang</h6> --}}
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group text-center">
                    {{-- <label class="form-control-label" for="input-username">{{ $product->name }}</label> --}}
                    <h2 class="mb-0">{{ $product->name }}</h2>
                    {{-- <img src="{{ $product->name }}" style="height: 20rem" > --}}
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group text-center">
                    <img src="{{ asset($product->image) }}" style="height: 20rem" >
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Jumlah</label>
                        <input type="number" name="amount" id="input-email" class="form-control" value="1">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <button class="btn btn-primary" type="submit">Pesan</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Informasi Barang</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-12">
                  {{-- <div class="form-group">
                    <label class="form-control-label" for="input-address">Address</label>
                    <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                  </div> --}}
                  <p class="mb-4">
                    {{ $product->description }}
                  </p>
                </div>
              </div>
              {{-- <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-city">City</label>
                    <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Country</label>
                    <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Postal code</label>
                    <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                  </div>
                </div>
              </div> --}}
            </div>
            {{-- <hr class="my-4" />
            <!-- Description -->
            <h6 class="heading-small text-muted mb-4">About me</h6>
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label">About Me</label>
                <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
              </div>
            </div> --}}
          </form>
        </div>
      </div>
    </div>
	</div>
@endsection