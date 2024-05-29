@extends('layout.master')
@section('Controller')
<form method="get" action="{{route('admin.product.getProductsByBand')}}"> 
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">Select Band</label> <br>
        <select
            class="form-select form-select-lg"
            name="selectBand"
            id=""
        >
            <option selected>Select one</option>
            <option value="Tinnitus Relief">Tinnitus Relief</option>
            <option value="Aralast">Aralast</option>
            <option value="Kay">Kay</option>
            <option value="EPOGEN">EPOGEN</option>
            <option value="Assured">Assured</option>
        </select>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btSearch">Bấm</button>
        </div>
    </div> 
    <table>
        <tbody>
            <thead>
                 <tr>
                    <th class=\"text-center\">PID</th>
                    <th class=\"text-center\">Name</th>
                    <th class=\"text-center\">Company</th>
                    <th class=\"text-center\">Year</th>
                    <th class=\"text-center\">Banh</th>
                    <th class=\"text-center\">Image</th>
                    <th class=\"text-center\">Edit</th>
                    <th class=\"text-center\">Delete</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td class=\"txet-left\">{{$product->pid}}</td>
                    <td class=\"txet-left\">{{$product->pname}}</td>
                    <td class=\"txet-left\">{{$product->company}}</td>
                    <td class=\"txet-left\">{{$product->year}}</td>
                    <td class=\"txet-left\">{{$product->banh}}</td>
                    <td class=\"txet-left\"><img src="{{$product->pimge}} "alt="Image"></td>
                    <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                    <a href="deleteProduct/{{$product -> pid}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i>
                    <a href="updateProduct/{{$product->pid}}">Edit</a></td>
                </tr>
            </thead>
            @endforeach
        </tbody>
    </table> 
</form>
@exception