@extends('dashboard.master')

@section('content')

    <form action="" method="post">

        <label for="">Title</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Content</label>
        <input type="text" name="content">

        <label for="">Category</label>
        <select name="category_id">
            @foreach ($categories as $title => $id )
                <option value="{{ $id }}"> {{ $title }} </option>
            @endforeach
        </select>

        <label for="">Description</label>
        <input type="text" name="description">

        <label for="">Posted</label>
        <select name="posted">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <button type="submit">Send</button>

    </form>

@endsection()
