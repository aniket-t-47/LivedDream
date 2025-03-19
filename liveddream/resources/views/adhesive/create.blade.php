<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Adhesive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 900px;
            margin-top: 20px;
        }

        .card {
            padding: 20px;
        }

        .btn-save {
            float: right;
            margin-top: 10px;
        }

        #save {
            position: absolute;
            right: 30%;
            top: 20px;
            width: 10%;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Add New Addhesive</h2>
        <form action="{{ route('adhesive.store') }}" method="POST">
            @csrf
            <button class="btn btn-primary btn-save" type="submit" id="save">Save </button>
            <div class="row mt-3">
                <!-- Company Details -->
                <div class="col-md-6">

                    <div class="card">
                        <h5>Addhesive Details</h5>
                        <div class="mb-3">
                            <label class="form-label">Company </label>

                            <select name="company_id" class="form-select" required>
                                <option value="">Select Company</option>
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Addhesive Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter addhesive name"
                                required>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Addhesive Quantity</label>
                            <input type="text" name="quatity" class="form-control"
                                placeholder="Enter addhesive quantity">
                        </div>
                        <div>
                            <h5>Pricing Details</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Purchase Cost</label>
                                    <input type="number" name="purchase_cost" class="form-control" placeholder="₹00"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Selling Price</label>
                                    <input type="number" name="selling_price" class="form-control" placeholder="₹00"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

</body>

</html>