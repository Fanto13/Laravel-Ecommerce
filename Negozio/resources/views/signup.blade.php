
@section('content')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
               
                    <form method="POST" action="{{ URL::action('SignupController@store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname"
                                class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text"
                                    class="form-control @error('surname') is-invalid @enderror" name="surname"
                                    value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="birth_date"
                                class="col-md-4 col-form-label text-md-right">{{ __('Data di nascita') }}</label>

                            <div class="col-md-6">
                                <input id="birth_date" type="date"
                                    class="form-control @error('birth_date') is-invalid @enderror" name="birth_date"
                                    value="{{ old('birth_date') }}" required autocomplete="birth_date" autofocus>

                                @error('birth_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sesso') }}</label>

                            <div class="col-md-6">
                                 <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror"
                                    name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus> 
                                    
                                     {{-- <label class="radio-inline"> <input type="radio"  name="m">Femmina</label>
                                    <label class="radio-inline"><input type="radio" name="f">Maschio</label></div> --}}
                                @error('sex')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        @auth
                        @if (Auth::user()->IsAdmin)
                        <div class="form-group row">
                            <label for="IsAdmin"
                                class="col-md-4 col-form-label text-md-right">{{ __('Dai amministratore (0 o 1)') }}</label>
                            
                            <div class="col-md-6">
                                <input id="IsAdmin" type="text"
                                    class="form-control @error('IsAdmin') is-invalid @enderror" name="IsAdmin"
                                    value="{{ old('IsAdmin') }}" required autocomplete="IsAdmin" autofocus>

                                @error('IsAdmin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                         <input type="submit" class="btn btn-primary" value='Register'>
                        @endif
                        @endauth
{{--                         
                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4"> --}}
                                

                                 {{-- @if(session('message'))

                                 <script>
                                   $(document).ready(function () {
                                                 $("#message").modal();
                                             });
                                 
                                 </script>
                                 
                                 <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLabel">Utenti</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                       </div>
                                       <div class="modal-body">
                                         {{session('message')}}
                                       </div>
                                       <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Continua
                                         </button>
                                       </div>
                                     </div>
                                   </div>
                                 </div> 
                                 
                                 @endif --}}
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div> 
</form>
@endsection


