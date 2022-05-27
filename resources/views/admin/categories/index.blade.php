@extends('layouts.app')

@section('content')
    <div class="container w-50 mx-auto">
        <div class="row">
            <div class="col-12">
                @if (session('delete-message'))
                    <div class="alert alert-danger">
                        {{session('delete-message')}}
                    </div>
                @endif
            </div>
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
            </div>
            <div class="col-12 text-end">
                <a href="{{route("admin.categories.create")}}"
                class="btn btn-sm btn-success">
                    Add Category
                </a>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Category</th>
                            <th scope="col">Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category )
                            <tr>
                                <td>
                                    {{$category->name}}
                                </td>
                                <td style="background-color:{{$category->colour}} ">
                                </td>
                                <td class="text-center">
                                    <a href="{{route('admin.categories.edit', $category)}}"
                                    class="btn btn-warning">
                                        &#9998;
                                    </a>
                                </td>
                                <td class="text-center">
                                    <form action="{{route('admin.categories.destroy', $category)}}" method="POST" class="category-destroyer" category-name="{{ucfirst($category->name)}}">
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
                                Resigner or log in to see categories
                            </h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
<script>
    const deleteForms = document.querySelectorAll('.category-destroyer');
    console.log(deleteForms);
    deleteForms.forEach(singleForm => {
        singleForm.addEventListener('submit', function (event) {
            event.preventDefault();
            userConfirmation = window.confirm(`Are you sure you want to delete ${this.getAttribute('category-name')}?` );
            if (userConfirmation) {
                this.submit();
            }
        })
    });
</script>
@endsection

