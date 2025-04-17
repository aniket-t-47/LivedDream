@extends('layouts.app')
@section('content')
    <div class="content">
        <!-- Header Section -->
        <div style="display: flex; flex-direction: row; gap: 30%;">
            <h2 class="mb-0">Create New Display Cost</h2>
            <button class="btn btn-primary btn-save" type="submit" id="sample">Save Sample</button>
        </div>

        <!-- Main Content Section -->
        <div class="row mt-3">
    <!-- Company Details -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5>Sample Details</h5>
                        <div class="mt-4">
                            <label class="form-label">Company</label>
                            <input type="text" name="company" class="form-control" placeholder="Enter category name" required>
                        </div>
                        <div class="mt-4">
                            <label class="form-label">Sample Name</label>
                            <input type="text" name="sample_name" class="form-control">
                        </div>
                        <div class="mt-4">
                            <label class="form-label">Sample Cost</label>
                            <input type="text" name="sample_cost" class="form-control" placeholder="00">
                        </div>
                        <div class="mt-4">
                            <span>Display area required</span>
                            <div class="row">
                                <div class="col-4">
                                    <label class="form-label">Length</label>
                                    <input type="text" class="form-control" placeholder="00">
                                </div>
                                <div class="col-4">
                                    <label class="form-label">Width</label>
                                    <input type="text" name="width" class="form-control" placeholder="00">
                                </div>
                                <div class="col-4">
                                    <label class="form-label">Thickness</label>
                                    <input type="text" name="thickness" class="form-control" placeholder="00">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display Product Image Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 d-flex justify-content-center align-items-center p-4">
                    <h6>Display Product Image</h6>
                    <div class="upload-box text-center mt-3">
                        <input type="file" id="fileInput" accept=".jpg, .png, .webp" hidden>
                        <label for="fileInput" class="upload-area" style="cursor: pointer;">
                            <i class="fa-solid fa-cloud-arrow-up fa-xl" style="color: #437ca8;"></i>
                            <p>Drag your file(s) or <span class="browse-text">browse</span></p>
                            <small>Max 10 MB files are allowed</small>
                        </label>
                    </div>
                    <p class="file-support-text mt-2">Only support .jpg, .png, and .webp files</p>
                </div>
            </div>
        </div>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const mainContent = document.getElementById('mainContent');
        const saveBtn = document.getElementById('sample');
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
