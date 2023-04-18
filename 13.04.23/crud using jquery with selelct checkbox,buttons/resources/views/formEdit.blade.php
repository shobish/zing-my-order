<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center mt-5 ">
            <div class="col-md-6">
                <div class="card py-4 px-4 center mt-5">
                    <div class="header text-center">
                        <h1>Fill The Form</h1>
                    </div>
                    <form method="post" action="{{url('/user-data')}}" id="formdata" enctype="multipart/form-data">
                        @csrf
                        <div class="response" id="response">

                        </div>
                        <div class="form-group ">
                            <label for="name">Name</label>
                            <input type="text" class="form-control name" name="name" id="name" placeholder="Enter name" />
                        </div>
                        <div class="form-group ">
                            <label for="age">Age</label>
                            <input type="number" class="form-control age" name="age" id="age" placeholder="Enter age" />
                        </div>
                        <!--hobbie-->
                        <div class="start form-group">
                            <label class="" for="">Hobbies</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input hobbies" class="hobbies" name="hobbies[]" type="checkbox" id="inlineCheckbox1" value="games" />
                            <label class="form-check-label" for="inlineCheckbox1">games</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input hobbies" name="hobbies[]" type="checkbox" id="inlineCheckbox2" value="reading" />
                            <label class="form-check-label" for="inlineCheckbox2">Reading</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input hobbies" name="hobbies[]" type="checkbox" id="inlineCheckbox2" value="dance" />
                            <label class="form-check-label" for="inlineCheckbox2">dance</label>
                        </div>
                        <!--end-hobbie-->
                        <!--start-gender-->
                        <fieldset class="form-group">
                            <label class=" col-sm-2 ">sex</label>
                            <div class="row">
                                <div class="col-sm-10 d-flex">
                                    <div class="form-check px-4">
                                        <input class="form-check-input sex " id="sex" name="sex" type="radio" name="gridRadios" id="gridRadios1" value="Male" checked />
                                        <label class="form-check-label " for="gridRadios1">male </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input sex " id="sex" name="sex" type="radio" name="gridRadios" id="gridRadios2" value="Female" />
                                        <label class="form-check-label" for="gridRadios2">female </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--end-gender-->
                        <!--start-class-->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">select you class</label>
                            <select class="form-control select class" id="class" name="class" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <!--end-class-->



                        <div class="d-flex justify-content-md-end">
                            <button type="submit" id="btn-submit" class="btn btn-primary submit">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

</body>

</html>