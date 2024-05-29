@extends('layout.master');
@section('Controller')

if(isset($data["products"])){
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
        </thead>
    </tbody>
</table>
}
@exception

@foreach($products as $product)
<tr>
    <td class=\"txet-left\">{{$product->pid}}</td>
    <td class=\"txet-left\">{{$product->pname}}</td>
    <td class=\"txet-left\">{{$product->company}}</td>
    <td class=\"txet-left\">{{$product->year}}</td>
    <td class=\"txet-left\">{{$product->banh}}</td>
    <td class=\"txet-left\"><img src="{{$product->pimge}} "alt="Image"></td>
    <td class="center"><i class="fa fa-trash-o fa-fw"></i>
    <a href="admin/product/updateProduct"> Delete</a></td>
    <td class="center"><i class="fa fa-pencil fa-fw"></i>
    <a href="admin/product/updateProduct/{{$product->pid}}">Edit</a></td>
</tr>