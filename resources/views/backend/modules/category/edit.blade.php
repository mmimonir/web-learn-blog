@extends('backend.layouts.master')
@section('page_title', 'Category')
@section('page_sub_title', 'Edit')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Create Edit</h4>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::model($category, ['method'=>'put', 'route'=>['category.update', $category->id]]) !!}
                        @include('backend.modules.category.form')
                    {!! Form::button('Update Category', ['type'=>'submit', 'class'=>'btn btn-success mt-2']) !!}
                    {!! Form::close() !!}
                        <a href="{{route('category.index')}}"><button class="btn btn-success btn-sm mt-2">Back</button></a>

                </div>
            </div>

        </div>
    </div>

    @push('js')
        <script>
            $('#name').on('input', function(){
                let name= $(this).val()
                let slug = name.replaceAll(' ', '-')
                $('#slug').val(slug.toLowerCase());
            })
        </script>
    @endpush

@endsection
