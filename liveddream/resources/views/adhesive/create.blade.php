@extends('layouts.app')
@section('content')
<div class="container d-flex flex-column align-items-center">
    <!-- Header with Save Button -->
    <div class="d-flex justify-content-between align-items-center w-100 mb-4" style="max-width: 800px;">
        <h2 class="m-0">Add New Adhesive</h2>
        <button class="btn btn-primary btn-save" type="submit" form="adhesiveForm" id="adhesive">Save Adhesive</button>
    </div>

    <!-- Form Section -->
    <form id="adhesiveForm" action="{{ route('adhesive.store') }}" method="POST" class="w-100 d-flex justify-content-center">
        @csrf
        <div class="card p-4 w-100" style="max-width: 800px;">
            <h5>Addhesive Details</h5>

            <!-- Company -->
            <div class="mb-3">
                <label class="form-label">Company</label>
                <select name="company_id" class="form-select">
                    <option value="">Select Company</option>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Adhesive Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter adhesive name">
            </div>

            <!-- Quantity -->
            <div class="mb-3">
                <label class="form-label">Adhesive Quantity</label>
                <input type="text" name="quantity" class="form-control" placeholder="Enter adhesive quantity">
            </div>

            <!-- Pricing -->
            <h5>Pricing Details</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Purchase Cost</label>
                    <input type="number" name="purchase_cost" class="form-control" min="0" placeholder="₹00">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Selling Price</label>
                    <input type="number" name="selling_price" class="form-control" min="0" placeholder="₹00">
                </div>
            </div>
        </div>
    </form>
</div>
<script>
        document.addEventListener("DOMContentLoaded", function () {
        const mainContent = document.getElementById('mainContent');
        const saveBtn = document.getElementById('adhesive');
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
