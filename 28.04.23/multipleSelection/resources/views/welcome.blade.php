@include('layout.header')


<div class="container">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 mt-5">
        <form action="{{url('/multiselection')}}" method="POST" > 
            @csrf
              
           <div class="tableContainer ">
                            <table class="table table-striped table-dark" id="addtable" width=100px>
                                <thead>
                                    <tr>
                                        <th scope="col">CATEGORY</th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">DESCRIPTION</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">ACTION</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                        <th>
                                                                                           
                                                <select class="form-group" id="categoryoption[]" name="categoryoption[]">
                                                <option>--select--</option>
                                                <option>FOOD</option>
                                                <option>DRESS</option>
                                                <option>ELECTRONICS</option>
                                                <option>HOMEAPPLIANCES</option>
                                                <option>ACCESSORIES</option>
                                                </select>
                                            
                                        </th>
                                        <th> <input type="text" name="categoryname[]" id='product_name'> </th>
                                        <td><input type="text" name="categorydescription[]" id='product_description'> </td>
                                        <td><input type="text" name="categoryprice[]" id='product_price'> </td>
                                        <td><button type="button" class="btn btn-primary" id="addbtn">add </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
      
           
      
            <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
        
        </form>
    
    </div>    
</div>    
</div> 







@include('layout.script')
@include('query.multipleQuery')