
<x-master title="information">
    <div class="">
        <h1>
            information
        </h1>

        @foreach ($infos as $info )
           id :  {{ $info['id'] }} <br>
           nom :  {{ $info['nom'] }}<br>
           prenom :  {{ $info['prenom'] }}<br>
           tele :  {{ $info['tele'] }}

        @endforeach
    </div>
</x-master>