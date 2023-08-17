<div>
   <div class="card">
    <form wire:submit.prevent="store">
        <div class="card-header">
            form
        </div>
        <div class="card-body">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model='name'>
                @error('name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Addres</label>
                <input type="text" class="form-control  @error('email') is-invalid @enderror" wire:model='email'>
                @error('email')    
                <div id="validationServerEmailFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control  @error('password') is-invalid @enderror" wire:model='password'>
                @error('password')    
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="masuk" wire:click="store">
            </div>
        </div>
    </form>
   </div>
</div>
