<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($response as $data)
            <tr>
                <td>{{ $data['id'] }}</td>
                <td>{{ $data['nom'] }}</td>
                <td>{{ $data['prenom'] }}</td>
                <td>{{ $data['tele'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
