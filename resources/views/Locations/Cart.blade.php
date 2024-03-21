@extends('Locations.LocationsHeader2')



@section('content')

<!--NEW SECTION-->
<div class="py-12">
    <div class="max-w-9x1 mx-auto sm:px-30 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <br><br>
                <form action="/checkout" method="post">
                @csrf
                <input type="hidden" name="_token" >
                <button type="submit" class="btn btn-dark ml-50">Checkout using Spatie.</button>
                </form>
                
                <table width="100%" style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">
                    <thead class="table-dark">
                        <tr class="text-black ">
                            <th>ID</th>
                            <th>List Of Orders</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
