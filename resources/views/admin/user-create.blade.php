@extends('template')

@section('content')
<div class="container">
    <h1>Tambah User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="Admin">Admin</option>
                <option value="Operator">Operator</option>
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
