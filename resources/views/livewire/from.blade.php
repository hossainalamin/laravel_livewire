<div>
    <label for="name">Name:</label>
    <input type="text" wire:model.debounce.1000ms="name"><br><br>

    <label for="message">Message:</label>
    <textarea name="" id="" cols="30" rows="10" wire:model.debounce.1000ms='message'></textarea><br><br>

    M. Status:
    Single <input type="radio" value="single" wire:model="m_status">
    Married <input type="radio" value="married" wire:model="m_status"><br><br>

    <label for="Color">Color:</label>
    Red <input type="checkbox" value="red" wire:model="color">
    Green <input type="checkbox" value="green" wire:model="color"><br><br>

    <label for="Age">Age</label>
    <select name="age" id="" wire:model="age">>
        <option value="">Select age</option>
        <option value="30">30</option>
        <option value="35">35</option>
        <option vlaue="40">40</option>
    </select>
    <hr>
    name : {{$name}}<br>
    message : {{$message}}<br>
    M. status : {{$m_status}}<br>
    message : {{$message}}<br>
    color : 
    <ul>
    @foreach ($color as $colors )
        <li>{{$colors}}</li>
    @endforeach
    </ul>
    <br>
    Age: {{$age}}
</div>
