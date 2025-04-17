@extends('layouts.app')
@section('content')
<div class="content d-flex flex-column align-items-center">
    
    <!-- Header with title and button -->
    <div class="d-flex justify-content-between align-items-center w-100 mb-4" style="max-width: 800px;">
        <h2 class="mb-0">Create Category</h2>
        <button class="btn btn-primary btn-save" type="submit" id="category">Save Category</button>
    </div>

    <!-- Category form -->
    <div class="row w-100 justify-content-center">
        <div class="card p-4" style="width: 100%; max-width: 800px;height:250px">
            <h5 class="mb-3">Category Details</h5>
            <div class="mt-4">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter category name">
            </div>
        </div>
    </div>
</div>
<script>
        document.addEventListener("DOMContentLoaded", function () {
        const mainContent = document.getElementById('mainContent');
        const saveBtn = document.getElementById('category');
        const scrollThreshold = 100;

            if (mainContent && saveBtn) {
                mainContent.addEventListener('scroll', () => {
                    if (mainContent.scrollTop > scrollThreshold) {
                        saveBtn.classList.add('fixed-save-btn');
                    } else {
                        saveBtn.classList.remove('fixed-save-btn');
                    }
                });
            } else {
                console.warn('Main content or Save button not found');
            }
        });

    </script>

@endsection
