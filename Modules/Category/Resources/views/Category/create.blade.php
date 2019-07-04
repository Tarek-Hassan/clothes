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
                                Genders
                            </h3>
                        </div>
                    </div>
                </div>

                <form class="forms-sample col-md-9" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <!-- <input type="hidden" name="category_id" value=""> -->
                    <div class="form-group m-form__group row">
                                    <div class="col-md-10">
                                        <label for="exampleSelect1">
                                           Gender
                                        </label>
                                        <select class="form-control m-bootstrap-select m_selectpicker" multiple required name="type_id[]"
                                                data-live-search="true">
                                            @foreach($types as $type)
                                                <option
                                                        value="{{ $type->id }}">{{ $type->gender}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                    <div class="form-group">
                        <label for="exampleInputName1">CategoryName</label>
                        <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}"
                               id="exampleInputName1"
                               placeholder="CategoryName">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mr-2">{{ __('general.submit') }}</button>
                        <button class="btn btn-light">
                            <a href="{{route('category.index')}}"
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



