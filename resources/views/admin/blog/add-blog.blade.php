@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Blog Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{ route('create.blog') }}" method="POST" >
                        @csrf

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Blog Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" id="horizontal-firstname-input1"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input2" class="col-sm-3 col-form-label">Blog Slug</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="slug" id="horizontal-firstname-input2"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="horizontal-email-input"></textarea>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Blog</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
