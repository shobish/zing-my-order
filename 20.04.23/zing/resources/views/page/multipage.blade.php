@include('layout.header')
<body>
  <div class="container">
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-5">
        <form> 

            <div class="form-group">
                <label for="exampleFormControlSelect1"><h4>Select Categories</h4></label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>--select--</option>
                <option>FOOD</option>
                <option>DRESS</option>
                <option>ELECTRONICS</option>
                <option>HOMEAPPLIANCES</option>
                <option>ACCESSORIES</option>
                </select>
           </div>  
           <div class="form-group row mt-4">
             <div class="form-group col">
                    <label for="inputCategory">category</label>
                    <input type="text" class="form-control" id="inputCategory"  placeholder="category">
                </div>
                <div class="form-group col">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter ProductName">
                </div>
                <div class="form-group col">
                    <label for="inputDescription">description</label>
                    <input type="text" class="form-control" id="inputDescription" name="inputDescription" placeholder="Password">
                </div>
                <div class="form-group col">
                    <label for="inpuPrice">Price</label>
                    <input type="text" class="form-control" id="inpuPrice" name="inpuPrice" placeholder="Passwtextord">
                </div>  
            </div>
        
            <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
        
        </form>
    
    </div>    
</div>    
</div> 




</body>

@include('layout.script')