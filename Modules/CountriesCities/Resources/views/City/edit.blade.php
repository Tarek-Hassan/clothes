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
                                {{ __('admin.edit') }}
                            </h3>
                        </div>
                    </div>
                </div>

                <form class="forms-sample col-md-9" action="{{ route('city.update',[$data->id]) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')




                    <div class="form-group m-form__group ">

                                	<label for="exampleSelect1">
                                		Countries
                                	</label>
                                	<select class="form-control m-bootstrap-select m_selectpicker"  name="country_id" data-live-search="true">
                                		@foreach($countries as $country)
                                		<option {{ $data->country_id == $country->id ? 'selected' : '' }} value="{{ $country->id }}">{{ $country->country_name }}</option>
                                		@endforeach
                                	</select>
                                </div>


                    <div class="form-group">
                        <label for="exampleInputName1">cityName</label>
                        <input type="text" class="form-control" name="city_name" value="{{ old('city_name', $data['city_name']??'') }}"
                               id="exampleInputName1"
                               placeholder="cityName">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">
                            <a href="{{route('city.index')}}"
                               class="btn btn-secondary">
                               Cancel
                            </a>
                        </button>
                    </div>


                </form>

            </div>

        </div>
    </div>

@endsection



