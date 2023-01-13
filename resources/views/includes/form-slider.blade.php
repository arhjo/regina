<div class="col-md-8 ml-auto mr-auto text-center">
    <h1 class="title title-hero">{{__('messages.titulohero')}}</h1>
    <h4>{{__('messages.subhero')}}</h4>
</div>
<div class="col-md-10 ml-auto mr-auto">
    
    <div class="card card-raised card-form-horizontal card-hero">
        <div class="card-body ">
            <form method="post" role="form" action="{{ route('leads') }}">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="{{__('messages.nombre')}}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="lastname" id="lastname" value="{{old('lastname')}}" placeholder="{{__('messages.apellido')}}" class="form-control @error('lastname') is-invalid @enderror">
                            @error('lastname')
                            <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="{{__('messages.correo')}}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <input type="submit" class="btn btn-primary btn-block btn-send" value="{{__('messages.enviar')}}">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>