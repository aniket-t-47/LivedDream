@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center " style="min-height: 100vh;">
    <form action="{{ route('zones.store') }}" method="POST" style="width: 100%; max-width: 700px;">
        @csrf

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Create Zone</h2>
            <button class="btn btn-primary btn-save" type="submit" id="zone">Save Zone</button>
        </div>

        <!-- Card -->
        <div class="card p-4">
            <h5>Zone Details</h5>

            <div class="mt-4">
                <label class="form-label">Zone Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Zone name">
            </div>

            <div class="mt-4">
                <label class="form-label">Coverage Area</label>
                <textarea name="area" class="form-control" rows="4" placeholder="Enter remark or coverage area"></textarea>
            </div>
        </div>
    </form>
</div>
<script>
        document.addEventListener("DOMContentLoaded", function () {
        const mainContent = document.getElementById('mainContent');
        const saveBtn = document.getElementById('zone');
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
