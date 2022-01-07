<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>      
                    @endif
                    <div class="card my-3">
                        <div class="card-header">File upload</div>
                        <div class="card-body">
                            <form wire:submit.prevent = 'FileUpload' id="file-upload" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" wire:model="title">
                                </div>
                                @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group my-3">
                                    <label for="filename">File</label>
                                    <input type="file" name="file" class="file-control" wire:model="filename">
                                </div>
                                @error('filename')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
