@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage All Blogs</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->slug}}</td>
                                <td>{{$blog->description}}</td>

                                <td>

                                    <a href="{{ route('edit.blog', ['id' => $blog->id]) }}" class="btn btn-success btn-sm" title="Edit Blog">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" onclick="deleteBlog({{$blog->id}})" class="btn btn-danger btn-sm" title="Delete Blog">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                    <form action="{{route('delete.blog', ['id' => $blog->id])}}" method="POST" id="deleteBlog{{$blog->id}}">
                                        @csrf
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <script>
        function deleteBlog(id) {
            event.preventDefault();
            var check = confirm('Are You Sure To DELETE This Blog?');

            if(check){
                document.getElementById('deleteBlog'+id).submit();
            }


        }
    </script>



@endsection

