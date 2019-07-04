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

            <form class="forms-sample col-md-9" action="{{ route('categorydetails.update',[$data->id]) }}" method="post"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                <div class="form-group">
                    <label for="exampleInputName1">color</label>
                    <input type="text" class="form-control" name="color" value="{{ old('color', $data['color']??'') }}"
                        id="exampleInputName1" placeholder="color">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Quantity</label>
                    <input type="text" class="form-control" name="quantity"
                        value="{{ old('quantity', $data['quantity']??'') }}" id="exampleInputName1"
                        placeholder="quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">salary</label>
                    <input type="text" class="form-control" name="salary"
                        value="{{ old('salary', $data['salary']??'') }}" id="exampleInputName1" placeholder="salary">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">discount</label>
                    <input type="text" class="form-control" name="discount"
                        value="{{ old('discount', $data['discount']??'') }}" id="exampleInputName1"
                        placeholder="discount">
                </div>
                <div class="form-group m-form__group row">
                    <div class="col-md-10">
                        <label for="exampleSelect1">
                            size
                        </label>
                        <select class="form-control m-bootstrap-select m_selectpicker" multiple required name="size[]"
                            data-live-search="true">

                            @foreach($sizes as $size)
                            <option {{ old('size[]',in_array($size->id,$sizeCat)??'')? 'selected' : '' }}
                                value="{{ $size->id }}">{{ $size->size_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group m-form__group ">

                    <label for="exampleSelect1">
                        categories
                    </label>
                    <select class="form-control m-bootstrap-select m_selectpicker" name="country_id"
                        data-live-search="true">
                        @foreach($categories as $category)
                        <option {{ $data->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                            {{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group m-form__group ">

                    <label for="exampleSelect1">
                        types
                    </label>
                    <select class="form-control m-bootstrap-select m_selectpicker" name="type_id"
                        data-live-search="true">
                        @foreach($types as $type)
                        <option {{ $data->type_id == $type->id ? 'selected' : '' }} value="{{ $type->id }}">
                            {{ $type->gender }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Image</label>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image[]" multiple>
                            <label class="custom-file-label" for="customFile">Choose</label>
                        </div>
                        <!-- @foreach($images as $image)

                        <div class="form-group m-form__group">
                            <img src="{{-- asset('storage/'.$image->image) --}}" id="flag" style="width:50px">
                        </div>
                        @endforeach -->

                    </div>
                    <div id="image_preview"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title', $data['title']??'') }}"
                        id="exampleInputName1" placeholder="Title">
                </div>
                <div class="form-group m-form__group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description"
                        class="summernote">{{ old('description',$data['description']) }}</textarea>
                </div>





                <div class="form-group">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">
                        <a href="{{route('categorydetails.index')}}" class="btn btn-secondary">
                            Cancel
                        </a>
                    </button>
                </div>


            </form>

        </div>

    </div>
</div>

@endsection
@section('script')
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
