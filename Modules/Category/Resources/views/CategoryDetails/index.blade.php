@extends('general::layouts.admin')

@section('title',__('admin.admins'))

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            {{ __('admin.admins') }}
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <button onclick="window.location='{{ route('categorydetails.create') }}'"
                                class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>{{ __('admin.add') }}</span>
                                </span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <!--  -->
            <!--begin::Portlet-->
            <div class="m-portlet">

                <div class="m-portlet__body">
                    <!--begin::Section-->


                    <div class="m-section__content">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>{{ __('general.favourate') }}</th>
                                        <th>{{ __('general.title') }}</th>
                                        <th>{{ __('general.description') }}</th>
                                        <th>{{ __('general.color') }}</th>
                                        <th>{{ __('general.salary') }}</th>
                                        <th>{{ __('general.discount') }}</th>
                                        <th>{{ __('general.quantity') }}</th>
                                        <!-- <th>{{-- __('general.image') --}}</th> -->
                                        <th>{{ __('general.userName') }}</th>
                                        <th>{{ __('general.Gender') }}</th>
                                        <th>{{ __('general.category_Name') }}</th>
                                        <th>{{ __('admin.operation') }}</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($data as $value)

                                    <tr>
                                        <td >
                                            {{$value->id}}
                                        </td>

                                        <td>


                                        <a   data-favourate="{{$value->id}}">
                                                    <i  class="fa fa-heart-o"></i>
                                        </a>


                                        </td>
                                        <td>
                                            {{$value->title}}
                                        </td>
                                        <td>

                                            {!!nl2br($value->description)!!}
                                        </td>

                                        <td>
                                            {{$value->color}}
                                        </td>

                                        <td>
                                            {{$value->salary}}
                                        </td>
                                        <td>

                                            {{$value->discount}}
                                        </td>
                                        <td>
                                            {{$value->quantity}}
                                        </td>

                                        {{--   @foreach($images as $image)
                                       <td>
                                            <img src="{{ asset('storage/'.$image->image) }}" id="flag"
                                        style="width:50px;">
                                        @endforeach
                                        </td>
                                        --}}

                                        <td>
                                            {{$value->user->name}}
                                        </td>

                                        <td>
                                            {{$value->type->gender}}
                                        </td>
                                        <td>
                                            {{$value->category->category_name}}
                                        </td>

                                        <td>

                                            <a href="categorydetails/{{$value->id}}/edit"><button type="button"
                                                    class="btn btn-primary">Edite</button></a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#delete">Delete</button>
                                        </td>

                                    </tr>
                                    <div class="modal model-danger fade" id="delete" tabindex="1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
                                                </div>

                                                <form action="{{route('categorydetails.destroy',$value->id)}}"
                                                    method="post">
                                                    <div class="modal-body">
                                                        {{method_field('delete')}}
                                                        {{csrf_field()}}
                                                        <div>
                                                            <div class="box-body">
                                                                <p class="text-center">Are u sure want to delete?</p>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning pull-left"
                                                            data-dismiss="modal">No, cancel</button>
                                                        <button type="submit" class="btn btn-success">Yes,
                                                            Delete</button>
                                                    </div>
                                                </form>
                                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end::Section-->
                <!--  -->



            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script>
$(document).ready(function(){
//favourate it add and remove from database the only error is front end it not change the icon 
    $("[data-favourate]").click(function(e){
        e.preventDefault();
        var id =$(this).attr('data-favourate');
        $.ajax({
           type:'POST',
           url:'/admin/favorite',
           data:{id:id,_token: '{{csrf_token()}}'},
           success:function(data){
              if(data){
                if($("data-favourate").hasClass('fa fa-heart-o')){$("data-favourate").removeClass('fa fa-heart-o').addClass('fa fa-heart')}
               else if($("data-favourate").hasClass('fa fa-heart')){$("data-favourate").removeClass('fa fa-heart').addClass('fa fa-heart-o')}
              }

           },
           error: function (data, textStatus, errorThrown) {
                    console.log(data);

    },
        });
    });
});
</script>
@endsection

