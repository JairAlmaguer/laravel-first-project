@csrf
<label for="">Title</label>
<input type="text" name="title" value="{{ $post->title }}">

<label for="">Slug</label>
<input type="text" name="slug" value="{{ $post->slug }}">

<label for="">Content</label>
<input type="text" name="content" value="{{ $post->content }}">

<label for="">Category</label>
<select name="category_id">
    @foreach ($categories as $title => $id )
        <option {{ $post->category && $post->category->id ==$id ? 'selected' : ''}} value="{{ $id }}"> {{ $title }} </option>
    @endforeach
</select>

<label for="">Description</label>
<input type="text" name="description" value="{{ $post->description }}">

<label for="">Posted</label>
<select name="posted">
    <option {{ $post->posted =='yes' ? 'selected' : ''}} value="yes">Yes</option>
    <option {{ $post->posted =='no' ? 'selected' : ''}} value="no">No</option>
</select>

<button type="submit">Send</button>
