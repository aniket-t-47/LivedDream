@extends('layouts.nav')

@section('content')
<div class="d-flex flex-column flex-xl-row gap-4 custom-flex-lg">
    <!-- Left Section -->
    <div class="w-100 w-lg-50" style="width:50%;">
        <div class="d-flex flex-column align-items-center">
            <img id="productimg"src="img/image (1).png" alt="Wallpaper" style="width:50%; height:50%;">
            <button class="btn btn-outline-primary mt-2" onclick="toggleSampleImages()">View Sample Image</button>

            <div id="sampleImagesContainer" style="display: none;" class="mt-3 text-center">
                <img src="img\wallpaper.jpg" alt="Sample 1" style="width: 40%; margin-bottom: 10px;">
                <img src="img\wallpaper2.jpg" alt="Sample 2" style="width: 40%;">
            </div>
        </div>
        
        <div class="card p-3 mt-3" style="width:50%">
            <h5>Product Details</h5>
            <div class="d-flex justify-content-between"><strong>Product Code:</strong> <span id="productid">KL5656</span></div>
            <div class="d-flex justify-content-between"><strong>Size:</strong> <span id="productSize">10m X 20m</span></div>
            <div class="d-flex justify-content-between"><strong>Color:</strong> <span id="color">Golden</span></div>
            <div class="d-flex justify-content-between"><strong>Warranty:</strong> <span id="warranty">5 Years</span></div>
            <div class="d-flex justify-content-between"><strong>Price:</strong> <span id="price">₹200 per unit</span></div>
        </div>

        <div class="mt-3 d-flex flex-column gap-2 justify-content-center align-items-center">
            <button class="btn btn-primary" onclick="downloadImage()">Download Image</button>
            <button class="btn btn-success" onclick="showApplicationArea()">Application Area</button>
            <button class="btn btn-secondary" onclick="checkStock()">Check Stock Availability</button>
        </div>
    </div>

    <!-- Right Section -->
    <div class=" w-100 w-lg-50" style="width:50%;">
        <div >
            <h5>Calculate Area</h5>
            <div class="d-flex gap-3 justify-content-between">
                <div class="d-flex flex-column">
                    <label>Width (ft)</label>
                    <input type="number" class="form-control" placeholder="00">
                </div>
                <div class="d-flex flex-column">
                    <label>Height (ft)</label>
                    <input type="number" class="form-control" placeholder="00">
                </div>
            </div>
            <input type="number" class="form-control mt-2" placeholder="Total Area (sq.ft)">
        </div>
        
        <div class="card mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product</td>
                        <td>00</td>
                        <td>00</td>
                    </tr>
                    <tr>
                        <td>Adhesive</td>
                        <td>00</td>
                        <td>00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div>
            <h5>Additional Items</h5>
            <div class="d-flex gap-3 justify-content-between">
                <div class="d-flex flex-column w-50">
                    <label>Item Name</label>
                    <input type="text" class="form-control" placeholder="Enter Item Name">
                </div>
                <div class="d-flex flex-column">
                    <label>Price</label>
                    <input type="number" class="form-control" placeholder="00">
                </div>
            </div>
        </div>
         

        <h5>Labor & Transportation Details</h5>
        <div class="card p-3 mt-3 d-flex flex-column">
           
            <div class="d-flex justify-content-between">
                
                <label>Labor Charges</label>
                <span>00</span>
            </div>
            <div class="d-flex justify-content-between">
                <label>Estimated Delivery Date</label>
                <span>00</span>
            </div>
            <div class="mt-2">
                <label class="d-flex justify-content-flex-start">Transportation Charges</label>
                <input type="number" class="form-control" placeholder="Enter Transportation Charges">
                <label class="mt-2 d-flex justify-content-flex-start">Loading Charges</label>
                <input type="number" class="form-control" placeholder="00">
                <label class="mt-2 d-flex justify-content-flex-start">Unloading Charges</label>
                <input type="number" class="form-control" placeholder="00">
            </div>
        </div>
        
        <div class="card d-flex flex-column mt-3">
            <div class="form-check">
                <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                        Include GST (On POroduct)
                </label>00
                      
            </div>
            
            <div class="d-flex justify-content-between">
                
                <label>Total Cost </label>
                <span>00</span>
            </div>
        </div>
    </div>
   
</div>
<div style="display:flex;flex-direction:row;gap:40%;justify-content:center;align-items:center;margin-top:2%;margin-bottom:2%">
        <!-- <button type="button" class="btn btn-outline-secondary" style="width:10%" onclick="window.location.href='views\quatations\create_quotation.blade.php'">Back</button>
        <button type="button" class="btn btn-outline-secondary" style="width:10%">Next</button> -->
        <a href="{{ route('quotations.product_list') }}" class="btn btn-outline-secondary" style="width:15%">Back</a>
        <a href="{{ route('quotations.product_cart') }}" class="btn btn-outline-secondary" style="width:15%">Next</a>
        

</div>


<script>
    function toggleSampleImages() {
        const container = document.getElementById('sampleImagesContainer');
        container.style.display = (container.style.display === 'none' || container.style.display === '') ? 'block' : 'none';
    }


    function downloadImage() {
            const link = document.createElement('a');
            link.href = document.getElementById('productimg').src;
            link.download = 'product_image.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }




</script>
<script>
       
</script>
@endsection
