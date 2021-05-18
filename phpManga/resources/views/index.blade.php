<table class= "table table-bordered table-striped">
    <thread>
        <th> Id </th>
        <th> Titre </th>
        <th> Prix </th>
        <th> Couverture </th>
    </thread>
    @foreach ($mangas as $manga)
        <tr>
            <td> {{$manga ->id_manga}}</td>
            <td> {{$manga ->titre}}</td>
            <td> {{$manga ->prix}}</td>
            <td> {{$manga ->couverture}}</td>
        </tr>
    @endforeach

    @foreach ($dessinateurs as $dessinateur)
        <tr>
            <td> {{$dessinateur ->id_dessinateur}}</td>
            <td> {{$dessinateur ->nom_dessinateur}}</td>
            <td> {{$dessinateur ->prenom_dessinateur}}</td>
        </tr>
    @endforeach
</table>
