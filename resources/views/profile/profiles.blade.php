<x-master title="profile">
    <div class="">
        <h1>User Profiles</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>bio</th>
                    <th>email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profileData as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ Str::limit($data->bio, 50) }}</td>
                        <td>{{ $data->email }}</td>
                        <th> <a href="{{ route('profiles.show', $data -> id) }}" class="btn btn-primary">Voir plus</a> </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center pt-4">
        {{ $profileData->links() }}
    </div>
    </div>
</x-master>
