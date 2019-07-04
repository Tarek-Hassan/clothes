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

            <form class="forms-sample col-md-9" action="{{ route('categorydetails.store') }}" method="post"
                enctype="multipart/form-data">

                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <div class="form-group">
                    <label for="exampleInputName1">color</label>
                    <input type="text" class="form-control" name="color" value="{{ old('color') }}"
                        id="exampleInputcolor1" placeholder="color">
                </div>

                <!-- <div id="m_repeater_1">
                    <div class="form-group  " id="m_repeater_1">
                        <div data-repeater-list="" >
                            <div data-repeater-item class="form-group  align-items-center">


                                    <div class="m-form__group m-form__group--inline">
                                        <div class="m-form__label">
                                            <label class="m-label m-label--single">
                                                Color
                                            </label>
                                        </div>
                                        <div class="m-form__control">
                                        <input class="form-control m-input"
                                            type="text"  name="color[]" value="{{ old('color[]') }}"
                        id="exampleInputcolor1" placeholder="color">
                                        </div>
                                    </div>


                                    <div data-repeater-delete=""
                                        class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill">
                                        <span>
                                            <i class="la la-trash-o"></i>
                                            <span>
                                                Delete
                                            </span>
                                        </span>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="m-form__group form-group row">
                        <label class="col-lg-2 col-form-label"></label>
                        <div class="col-lg-4">
                            <div data-repeater-create=""
                                class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>
                                        Add
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div class="form-group">
                    <label for="exampleInputName1">Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}"
                        id="exampleInputquantity1" placeholder="quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">salary</label>
                    <input type="number" class="form-control" name="salary" value="{{ old('salary') }}"
                        id="exampleInputsalary1" placeholder="salary">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">discount</label>
                    <input type="number" class="form-control" name="discount" value="{{ old('discount') }}"
                        id="exampleInputdiscount1" placeholder="discount">
                </div>

                <div class="form-group m-form__group row">
                    <div class="col-md-10" <label for="exampleSelect1">
                        size
                        </label>
                        <select class="form-control m-bootstrap-select m_selectpicker" multiple name="size[]"
                            data-live-search="true">
                            @foreach($sizes as $size)
                            <option value="{{ $size->id }}">{{ $size->size_name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <div class="col-md-10">
                        <label for="exampleSelect1">
                            Categories
                        </label>
                        <select class="form-control m-bootstrap-select m_selectpicker" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-md-10">
                        <label for="exampleSelect1">
                            types
                        </label>
                        <select class="form-control m-bootstrap-select m_selectpicker" name="type_id">
                            @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->gender}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Image</label>

                        <div class="custom-file">
                            <input  type="file" class="custom-file-input" id="customFile"
                                name="image[]" multiple>
                            <label class="custom-file-label" for="customFile">Choose</label>
                        </div>
                    </div>
                    <div id="image_preview"></div>

                    <!-- <div class="form-group flag-img m-form__group" style="display:none;">
                <img src="#" id="flag" style="width:50px;">
            </div> -->
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                        id="exampleInputtitle1" placeholder="title">
                </div>
                <div class="form-group m-form__group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" class="summernote">{{ old('description') }}</textarea>
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-primary mr-2">{{ __('general.submit') }}</button>
                    <button class="btn btn-light">
                        <a href="{{route('categorydetails.index')}}" class="btn btn-secondary">
                            {{ __('general.cancel') }}
                        </a>
                    </button>
                </div>


            </form>

        </div>

    </div>
</div>

@endsection
@section('script')
        <!-- <script>
                function display(input) {

                    // console.log(count(image));
                    if (input.files && input.files[0]) {
                        $('.flag-img').show();
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#flag')
                                .attr('src', e.target.result)
                                .width(50);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

            </script> -->

        <script type="text/javascript">
            $("#customFile").change(function () {

                $('#image_preview').html("");

                var total_file = document.getElementById("customFile").files.length;

                for (var i = 0; i < total_file; i++)

                {

                    $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");

                }

            });


        </script>
@endsection
@section('styles')
    <style type="text/css">
        input[type=file] {

            display: inline;

        }

        #image_preview {



            padding: 10px;

        }

        #image_preview img {

            width: 200px;

            padding: 5px;

        }

    </style>
@endsection
