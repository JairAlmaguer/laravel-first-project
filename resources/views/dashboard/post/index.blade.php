@extends('dashboard.master')

@section('content')

    <table>
        <thead>
            <tr>
                Title
            </tr>
            <tr>
                Posted
            </tr>
            <tr>
                Category
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->title }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ $post->posted }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ $post->category->title }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection()
