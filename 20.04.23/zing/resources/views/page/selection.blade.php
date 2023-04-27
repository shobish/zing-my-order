@include('layout.header');



<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5 ">
                <div class="form-container ">
                    <div class="formHeader ">
                        <h4 class="text-center py-2">Fill The Form Correctly</h4>
                    </div>
                    <div class="errordata">

                    </div>
                    <form action="{{url('/addselection')}}" method="post" id="selectionform">
                        @csrf

                        <div class="form-group-select">
                            <label for="category">Category</label>
                            <select class="form-select" aria-label="Default select example" id="category" name="category">
                                <option selected>--select the category</option>
                                <option value="dress">Dress</option>
                                <option value="Food">Food</option>
                                <option value="elctronics">electronics</option>
                            </select>
                        </div>
                        <div class="tableContainer ">
                            <table class="table table-striped table-dark" id="addtable" width=100px>
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">description</th>
                                        <th scope="col">price</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th> <input type="text" name="category[0][name]" id='pname'> </th>
                                        <td><input type="text" name="category[0][description]" id='pdes'> </td>
                                        <td><input type="text" name="category[0][price]" id='pprice'> </td>
                                        <td><button type="button" class="btn btn-primary" id="add">add </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="submit py-3">
                            <button type="submit" id="sumbit" class=" btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dataTable">
                <table class="table table-dark" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">ITEMS</th>                           
                            <th scope="col">ACTION</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $categories as $items)
                        <?php $products= json_decode($items->items,true); ?>
                                         
                       
                        <tr>
                            <td>{{$items->id}}</td>
                            <td>{{$items->category}}</td>   
                            <td><table class="table table-dark">
                            <thead>
                                <tr>                                
                                <th scope="col">Product name</th>
                                <th scope="col">Product description</th>
                                <th scope="col">Product price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $list)  
                                <tr>
                                <td>{{$list['name']}}</td>
                                <td>{{$list['description']}}</td>
                                <td>{{$list['price']}}</td>
                                </tr> 
                                  @endforeach   
                            </tbody>
                            </table></td>
                            <td><a href="edititems/{{$items->id}}"><button id=" dataEdit" class="alert alert-primary">edit</button></a>
                                <a href="deleteitems/{{$items->id}}"><button id="dataDelete" class="alert alert-danger">delete</button></a>
                            </td>
                        </tr>
                     
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
@include('layout.script')

@include('query.selectionQuery')

</html>