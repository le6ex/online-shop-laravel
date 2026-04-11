<h1>Edit Category</h1>

<form method="POST" action="{{ route('categories.update', $category) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}">
    <input type="text" name="slug" value="{{ $category->slug }}">

    <button type="submit">Update</button>
</form>