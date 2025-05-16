@extends('dashboard.master')

@section('content')

<a href="{{ route('post.create') }}" target="_blank">Create</a>

    <table>
        <thead>
            <td>
                Title
            </td>
            <td>
                Posted
            </td>
            <td>
                Category
            </td>
            <td>
                Options
            </td>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        {{ $post->category->title }}
                    </td>
                    <td>
                        <a href="{{ route('post.edit', $post) }}">Edit</a>
                        <a href="{{ route('post.show', $post) }}">Show</a>
                        <a href="{{ route('post.destroy', $post) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection()
