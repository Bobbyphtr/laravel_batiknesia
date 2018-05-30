@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="namaProduct" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="namaProduct" type="text" class="form-control{{ $errors->has('namaProduct') ? ' is-invalid' : '' }}" name="namaProduct" value="{{ old('namaProduct') }}" required autofocus>

                                @if ($errors->has('namaProduct'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('namaProduct') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dimensi" class="col-md-4 col-form-label text-md-right">{{ __('Product Dimension') }}</label>

                            <div class="col-md-6">
                                <input id="dimensi" type="text" class="form-control{{ $errors->has('dimensi') ? ' is-invalid' : '' }}" name="dimensi" value="{{ old('dimensi') }}" required>

                                @if ($errors->has('dimensi'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dimensi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Product Description') }}</label>

                            <div class="col-md-6">
                                <textarea placeholder="Enter description" style="resize: vertical" name="deskripsi" rows="5"
                                spellcheck="false" class="form-control autosize-target text-left"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                            <div class="col-md-6">
                                <input id="stock" type="number" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" value="{{ old('stock') }}" required>

                                @if ($errors->has('stock'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Product Price') }}</label>

                            <div class="col-md-6">
                                <input id="harga" type="number" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{ old('harga') }}" required>

                                @if ($errors->has('harga'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register Product') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
