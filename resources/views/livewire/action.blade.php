<div>
    <button type="button" wire:click="addToNum(10,20)" >Sum</button>
    <br>
    <textarea wire:keydown.enter="showText($event.target.value)"></textarea>
    <br>
    <form action="" wire:submit.prevent = "getSubmitNumber">
        Enter number1 : <input type="text" name="num1" wire:model = "num1">
        Enter number2 : <input type="text" name="num2" wire:model = "num2">
        <br>
        <input type="submit" value="Submit">
    </form>
    <hr>
    sum = {{$sum}}<br>
    Message = {{$msg}}

</div>
