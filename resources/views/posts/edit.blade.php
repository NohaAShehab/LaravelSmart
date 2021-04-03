@extends("layouts.app")

@section("content")
    <h2> Edit Post</h2>
    <form>
        <table class="table table-bordered">
            <tr>
                <td>
                    title
                </td>
                <td>
                    <input type="text" name="title" value="{{$post["title"]}}">
                </td>
            </tr>
            <tr>
                <td>
                    Description
                </td>
                <td>
                    <input type="text" name="description" value="{{$post["description"]}}" >
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit"  value="Submit" class=" btn btn-success">
                </td>
            </tr>
        </table>
    </form>
@endsection
