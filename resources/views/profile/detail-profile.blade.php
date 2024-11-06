<x-master title="profile">
    <div class="">
        <h1>User Profiles</h1>

        <p>Id : {{ $profile->id }}</p>
        <p>Nom : {{ $profile->name }}</p>
        <p>Bio : {{ Str::limit($profile->bio, 50) }}</p>
        <p>Email : {{ $profile->email }}</p>
    </div>
</x-master>
