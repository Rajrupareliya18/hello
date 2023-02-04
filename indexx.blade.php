<table border="1" cellpadding="10">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>city</th>
    </tr>
   
    @foreach($products as $pro)

        <tr>
            <td> {{$pro->id}} </td>
            <td> {{ base64_decode($pro->name) }}</td>
            <td> {{$pro->city}} </td>
        </tr>
     @endforeach


</table>