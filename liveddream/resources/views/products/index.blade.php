
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .content {
            max-width: 1200px;
            margin-top: 20px;
            border:2px solid rgb(179, 175, 175);
            width:70%;
            justify-content: center;
            position: relative;
            padding: 20px;
           
        }
        .card {
            padding: 20px;
        }
        .row{
            margin-top: 5%;
        }
        .container{
            display: flex;
            flex-direction: row;
            /* border:2px solid black; */
           
        }
        .sidebar{
            display: flex;
            flex-direction: column;
            border:2px solid rgb(179, 175, 175);
            width:25%;
            /* position: fixed; */
            /* left: 0;
            top: 0; */ 
             /* background-color: #343a40;  */
              padding-top: 40px; 
              margin-top: 20px;
        } 
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            /* color: white; */
        }
        #product{
            position: absolute;
            right: 20px;
            top: 30px;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <!-- <h4 class="text-white text-center">Lived Dream</h4> -->
            <a href="#"><i class="fa-solid fa-th"></i> Dashboard</a>

            <a href="#"><i class="fa-light fa-memo"></i>Quotations</a>
            <a href="#">Products</a>
            <a href="/companies">Companies</a>
            <a href="#">Categories</a>
            <a href="#">Zones</a>
            <a href="/adhesive">Adhesive</a>
            <a href="#">Samples</a>
            <a href="#">Users</a>
        </div>
        <div class="content">
            <h2 class="mb-4">Create New Product</h2>
            

            <button class="btn btn-primary" id="product">Save Product</button>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <h5>Product Details</h5>
                        <div class="mb-3">
                            <label class="form-label">Company</label>
                            <select class="form-select">
                                <option>Select company</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select">
                                    <option>Select Product category</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" placeholder="Enter product name">
                        </div>
                        <h5>Product Size</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Length</label>
                                <input type="number" class="form-control" value="00">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Width</label>
                                <input type="number" class="form-control" value="00">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Thickness</label>
                                <input type="number" class="form-control" value="00">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Other</label>
                                <button class="btn btn-primary form-control">Add Parameter</button>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">GST Applied (%)</label>
                            <input type="text" class="form-control" placeholder="Enter GST Percentage">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Warranty period</label>
                            <div class="row">
                                <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="Duration">
                                </div>
                                <div class="col-md-6">
                                        <select class="form-select">
                                            <option>Months</option>
                                            <option>Years</option>
                                        </select>
                                </div>
                                    


                                
                            </div>
                            
                        </div>
                            <!-- <button class="btn btn-primary">Save Product</button> -->
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="card">
                            <h5>Adhesive</h5>
                            <select class="form-select mb-3">
                                <option>Select Adhesive</option>
                            </select>
                            <div class="mb-3">
                                <label class="form-label">Labor Charges (per sq.ft)</label>
                                <input type="text" class="form-control" placeholder="Enter Labor Charges">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Estimated Delivery Time</label>
                                <input type="text" class="form-control" placeholder="Enter estimated delivery time">
                            </div>
                            <button class="btn btn-primary">Save</button>
                        </div>
                        <div class="card mt-3">
                            <h5>Product Images</h5>
                            <button class="btn btn-dark w-100 mb-3">Add Product Images</button>
                            <h6>Sample Images</h6>
                            <div class="border p-3 text-center" style="border-style: dashed;">
                                Drag your file(s) or <a href="#">browse</a>
                                <br>
                                Max 10 MB files are allowed
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
