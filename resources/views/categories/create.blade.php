<h1>Create Category</h1>

<form method="POST" action="{{ route('categories.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <input type="text" name="slug" placeholder="Slug">

    <button type="submit">Save</button>
</form>