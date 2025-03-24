
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
        #save{
            position: absolute;
            right:30%;
            top: 20px;
            width: 15%;
        }
</style>
<body>
    <div class="container">
        <h2>Products</h2>
        <button class="btn btn-primary" id="save">+Create New Product</button>
        <div class="card p-2">
            <div class="d-flex  justify-content-between">
                <!-- Search Bar -->
                <div class="input-group " style="max-width: 300px;">
                    <span class="input-group-text">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>

                <div class="flex-grow-1"></div>
        
                <!-- Filter Dropdown -->
                <div class="input-group align-items-flex-end" style="max-width: 200px;">
                    <span class="input-group-text">
                        <i class="fas fa-filter"></i>
                    </span>
                    <select class="form-select">
                        <option selected>Filter by</option>
                        <option value="company">Company</option>
                        <option value="category">Category</option>
                        <option value="product">Product</option>
                    </select>
                </div>
        
                <!-- Delete Button -->
                <!-- <button class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i>
                </button> -->
            </div>
        </div>
        


           
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Code</th>
                <th scope="col">Company</th>
                <th scope="col">Category</th>
                <th scope="col">Warrenty</th>
                <th scope="col">Actual Price</th>
                <th scope="col">Selling Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">product name</th>
                <td>abc123</td>
                <td>comp1</td>
                <td>wall</td>
                <td>5 years</td>
                <td>240</td>
                <td>200</td>
              </tr>
              <tr>
                <th scope="row">product name</th>
                <td>abc123</td>
                <td>comp1</td>
                <td>wall</td>
                <td>5 years</td>
                <td>240</td>
                <td>200</td>
              </tr>
              <tr>
                <th scope="row">product name</th>
                <td>abc123</td>
                <td>comp1</td>
                <td>wall</td>
                <td>5 years</td>
                <td>240</td>
                <td>200</td>
              </tr>
            </tbody>
          </table>
        
    </div>
    
</body>
</html>