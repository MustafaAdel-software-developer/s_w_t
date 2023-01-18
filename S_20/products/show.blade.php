@extends('layouts.admin')
@section('content')
    <h2>Show Product</h2>
    
        <label>Name:</label>
        <h3>{{$category->name}}</h3>
            <div>
                <img src="{{url($product['image'])}}" />
            </div>
        <a class="btn btn-secondary" href="{{ url('admin/categories') }}">Cancel</a>
    </form>
@endsection
