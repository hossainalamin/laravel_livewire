<style>
    nav svg{
        height : 20px;
    }
</style>
<div>
    @include('livewire.create')
    @include('livewire.update')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            All student
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                                Add student
                            </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-stripped">
                                <thead>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student['firstname'] }}</td>
                                            <td>{{ $student['lastname'] }}</td>
                                            <td>{{ $student['email'] }}</td>
                                            <td>{{ $student['phone'] }}</td>
                                            <td>  
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})">
                                            Edit</button>
                                            </td>
                                            <td>  
                                            <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to delete');" wire:click.prevent="delete({{$student['id']}})">
                                            Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
