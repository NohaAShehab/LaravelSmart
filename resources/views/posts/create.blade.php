@extends("layouts.app")

@section("content")
    <h2> Add Post</h2>

    <form action="{{route("posts.store")}}" method="post">
        @csrf
        @method("post")


        <table class="table table-bordered">
            <tr>
                <td>
                    title
                </td>
                <td class="mb-3">
                    <input   class="form-control" type="text" name="title" >
                </td>
            </tr>
            <tr>
                <td>
                    Slug
                </td>
                <td>
                    <input   class="form-control" type="text" name="slug">
                </td>
            </tr>
            <tr>
                <td>
                    Description
                </td>
                <td>
                    <input   class="form-control" type="text" name="description">
                </td>
            </tr>
            <tr>
                <td>
                    Post creatoror
                </td>
                <td>
                    <select class="form-control" name="user_id">
                        @foreach($users as $user)
                            <option value="{{$user->id}}"> {{$user->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" value="Submit" class=" btn btn-success" >
                </td>
            </tr>
        </table>
    </form>
@endsection
