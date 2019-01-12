<style>
    input
    {
        padding-right:30%;
    }
</style>
@extends('layouts.app')

@section('content')      
<center>
        <form action="{{url('/doInsertDrug')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="container">
            <table width="50%">

                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="Name" id=""></td>
                </tr>
                <tr>
                    <td>Desc : </td>
                    <td><input type="text" name="Desc" id=""></td>
                </tr>
                <tr>
                    <td>Image : </td>
                    <td><input type="file" name="ImageUrl" id=""></td>
                </tr>
                <tr>
                    <td>Price : </td>
                    <td><input type="text" name="AvgPrice" id=""></td>
                </tr>
                <tr>
                    <td>Brand : </td>
                    <td><input type="text" name="Brand" id=""></td>
                </tr>
                <tr>
                    <td>Type :</td>
                    <td><input type="text" name="Type" id=""></td>
                </tr>
                <tr>
                    <td>General :</td>
                    <td><input type="text" name="General" id=""></td>
                </tr>
            </table>
                
            </div>
            <br>
            <button type="submit" class="btn-Warning">Insert</button>
        </form>
        {{--text error--}}
    <div style="color:red;">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <br>{{ $error }}
            @endforeach
        @endif
    </div>
    </center>

@endsection