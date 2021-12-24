<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Contact form</h2>
                        </div>
                        <div class="card-body">
                            <form action="" wire:submit.prevent="submitForm">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" wire:model="name">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="mail" class="form-control" wire:model="email">
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" wire:model="phone">
                                    @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="msg" id="" cols="30" rows="10" wire:model="msg"></textarea>
                                    @error('msg')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
