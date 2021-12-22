<div>
    <label for="title">Title</label>
    <input type="text" name="title" wire:model="title">
    <label for="name">Name</label>
    <input type="text" name="name" wire:model="name">
    <hr>
    title:{{$title}}<br>
    name:{{$name}}
    <hr>
    <h3>Lifecyle hook method</h3>
    @foreach ($infos as $info)
        <h4>{{$info}}</h4>
    @endforeach
</div>
