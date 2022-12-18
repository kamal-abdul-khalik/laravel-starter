@extends('layouts.app')

@section('title', 'Edit Permission')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Permission</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit Permission</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Permission</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('permissions.edit', $permission) }}" method="post">
                                @csrf
                                @method('PUT')

                                @include('admin.permissions.permission.partials.form-control')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
