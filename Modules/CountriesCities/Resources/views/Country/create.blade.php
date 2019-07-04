@extends('general::layouts.admin')

@section('title',__('general.admin'))

@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Countries
                            </h3>
                        </div>
                    </div>
                </div>

                <form class="forms-sample col-md-9" action="{{ route('country.store') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="exampleInputName1">CountryName</label>
                        <input type="text" class="form-control" name="country_name" value="{{ old('country_name') }}"
                               id="exampleInputName1"
                               placeholder="CountryName">
                    </div>

                
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mr-2">{{ __('general.submit') }}</button>
                        <button class="btn btn-light">
                            <a href="{{route('country.index')}}"
                               class="btn btn-secondary">
                                {{ __('general.cancel') }}
                            </a>
                        </button>
                    </div>


                </form>

            </div>

        </div>
    </div>

@endsection



