@extends('layouts.app')

@section('content')
    <div class="container w-75 mx-auto">
        <div class="row">

            <div class="col-12 text-end">
                <a href="{{route("admin.posts.create")}}"
                class="btn btn-sm btn-success">
                    Add post
                </a>
            </div>
            <div class="col-12">
                @if (session('delete-message'))
                    <div class="alert alert-danger">
                        {{session('delete-message')}}
                    </div>
                @endif
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">date</th>
                            <th scope="col">Caterogy</th>
                            <th scope="col">author</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post )
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>
                                    @foreach ($post->categories as $category)
                                        {{$category->name}}
                                    @endforeach
                                </td>
                                <td>{{$post->author}}</td>
                                <td>
                                    <a href="{{route('admin.posts.show', $post->id )}} " class="btn btn-primary">
                                        Read More
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('admin.posts.edit', $post)}}"
                                    class="btn btn-warning">
                                        &#9998;
                                    </a>
                                </td>
                                <td colspan="2">
                                    <form action="{{route('admin.posts.destroy', $post)}}" method="POST" class="post-destroyer" post-name="{{ucfirst($post->name)}}">
                                        @csrf
                                        @method('DELETE')
                                            <button class="btn btn-md btn-delete btn-outline-danger" type="submit">
                                                &#10006;
                                            </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h2>
                                Resigner or log in to see posts
                            </h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <div class="col-12 d-flex justify-content-center text-center p-3">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
<script>
    const deleteForms = document.querySelectorAll('.post-destroyer');
    console.log(deleteForms);
    deleteForms.forEach(singleForm => {
        singleForm.addEventListener('submit', function (event) {
            event.preventDefault();
            userConfirmation = window.confirm(`Are you sure you want to delete ${this.getAttribute('post-name')}?` );
            if (userConfirmation) {
                this.submit();
            }
        })
    });
</script>
@endsection

