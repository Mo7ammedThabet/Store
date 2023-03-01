@extends('layouts.dashboard')

@section('title','Categories')

@section('breadcrumb')
    @parent
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')

<div class="mb-5">
    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-outline-primary mr-2">Create</a>
</div>

<teable class="table">
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Parent</th>
            <th>Created At</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
         <tr>
            <td></td>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->parent_id }}</td>
            <td>{{ $category->created_at }}</td>
            <td>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-outline-success">Edit</a>

            </td>
            <td>
            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
            @csrf
            <!-- Form Method Spoofing -->
            <input type="hidden" name="_method" value="delete">
            @method('delete')
            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>

            </td>
            </tr>
            @empty
        <tr>
        <td colspan="9">No categories defined.</td>
        </tr>
        @endforelse
    </tbody>
</teable>

@endsection
