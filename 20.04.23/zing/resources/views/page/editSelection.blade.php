@include('layout.header');
<style>
    #editadd{
        display: flex;
        justify-content: flex-end;
        

    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5 ">
            <div class="form-container ">
                <div class="formHeader ">
                    <h4 class="text-center py-2">Fill The Form Correctly</h4>
                </div>

                <div class="errordata"></div>
                <form action="{{url('/updateitem',$item->id)}}" method="post" id="selectionform">
                    @csrf
                   
                    <div class="form-group-select">
                        <label for="category">Category</label>
                        <select class="form-select" aria-label="Default select example" id="category" name="category">

                            <option>--select the category</option>
                            <option value="dress" {{ $item->category=='dress'  ? 'selected' : ""}}>Dress</option>
                            <option value="Food" {{ $item->category=='Food' ? 'selected' : ""}}>Food</option>
                            <option value="electronics" {{ $item->category=='electronics' ? 'selected' : "" }}>electronics</option>

                        </select>
                    </div>
                    <div class="tableContainer ">
                        <table class="table table-striped table-dark" id="edittable" width=100px>
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">description</th>
                                    <th scope="col">price</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                              <td></td>
                              <td></td>
                              <td></td>
                                <td> <button type="button" class="btn btn-primary"  id="editadd">+</button></td>
  

                               
                              @foreach($items as $list)
                               
                                <tr>
                                    <td> <input type="text" name="pname[]" id='pname' value={{$list->name}} ></td>
                                    <td><input type="text" name="pdes[]" id='pdes'value={{$list->description}}> </td>
                                    <td><input type="text" name="pprice[]" id='pprice'value={{$list->price}}> </td>
                                    <td><button type="button" class="btn btn-danger" id="editremove">remove </button></td>
                                  
                                </tr>                                
                                @endforeach                              

                            </tbody>
                        </table>

                    </div>

                    <div class="submit py-3">
                        <button type="submit" id="Sumbit" class=" btn btn-primary">update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('layout.script')

@include('query.selectionQuery')