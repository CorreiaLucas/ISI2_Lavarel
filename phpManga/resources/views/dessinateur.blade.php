<table class= "table table-bordered table-striped">
    <thread>
        <th> Id </th>
        <th> Nom </th>
        <th> Prénom </th>
    </thread>
    @foreach ($dessinateurs as $dessinateur)
        <tr>
            <td> {{$dessinateur ->id_dessinateur}}</td>
            <td> {{$dessinateur ->nom_dessinateur}}</td>
            <td> {{$dessinateur ->prenom_dessinateur}}</td>
        </tr>
    @endforeach
</table>