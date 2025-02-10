@props(['id', 'route'])

<form class="delete-form" id="delete-form-{{ $id }}" method="POST" action="{{ route($route.'.destroy', $id) }}" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="button" onclick="confirmDelete({{ $id }})" data-id="{{ $id }}" class="btn btn-danger delete-btn">
        حذف
    </button>
</form>