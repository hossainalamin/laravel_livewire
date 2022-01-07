    <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
              <div class="card-body">
                <form>
                    <input type="hidden" name="id" wire:model="ids">
                    <div class="mb-3">
                      <label for="Firstname" class="form-label">First name</label>
                      <input type="text" class="form-control" name="firstname" aria-describedby="emailHelp" wire:model="firstname">
                      @error('message')
                           <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname" aria-describedby="emailHelp" wire:model="lastname">
                        @error('message')
                           <span class="text-danger ">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" wire:model="email">
                        @error('message')
                           <span class="text-danger ">{{$message}}</span>
                        @enderror
                      </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="text" class="form-control" name="phone" wire:model="phone">
                      @error('message')
                           <span class="text-danger ">{{$message}}</span>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary" wire:click.prevent="update()">Update</button>
                  </form>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>