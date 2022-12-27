@extends('layouts.authpanel')
@section('content')
    <form action="{{ route('auth.create') }}" method="POST">
        @csrf
          <div class="container">
          <br>
          <br>
          <br>
          <br>
          <hr>

                       <div class="d-flex flex-column">
                                                              <!--   -->
                                                         <!-- Name Input -->
                                                              <!--   -->
                       <div class="col-12 ">
                           <div class="col">
                               <label for="name" class="col-sm-2 col-form-label">Name :</label>
                               <input
                                     id="for"
                                     type="text"
                                     class="form-control"
                                     placeholder="enter your name ..."
                                     aria-label="name"
                                     name="name"
                                     value="{{ old('name') }}">

                           </div>
                           <span class="text-danger">@error('name')  {{ $message }} @enderror</span>

                       </div>




                       <hr>

                       <div class="col-12 ">
                                                            <!--    -->
                                                       <!-- email Input -->
                                                            <!--    -->
                           <label for="staticEmail" class="col-sm-2 col-form-label">Email :</label>
                           <div class="col-sm-10 form-control">
                               <input
                                   type="text"
                                   class="form-control-plaintext"
                                   id="staticEmail"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="enter your email ...">

                           </div>
                           <span class="text-danger">@error('email')  {{ $message }} @enderror</span>
                       </div>



                       <hr>


                       <div class="col-12 ">
                                                           <!--       -->
                                                      <!-- Password Input -->
                                                           <!--       -->
                       <label for="inputPassword" >Password :</label>
                       <div class="col-12">
                           <input
                               type="password"
                               class="form-control"
                               id="inputPassword"
                               name="password"
                               placeholder="enter your password ...">

                       </div>
                           <span class="text-danger">@error('password')  {{ $message }} @enderror </span>
                       </div>



                        <br>
                        <br>
                        <hr>

                        <div class="col-12">
                                                               <!--     -->
                                                          <!-- Submit Input -->
                                                               <!--     -->
                            <input
                                type="submit"
                                class="btn btn-primary form-control"
                                id="inputPassword"
                                name="password"
                                value="Submit">

                        </div>

                  </div>
              <a class="text-decoration-none text-center" href="{{ route('auth.login') }}">Already registered tab the link to login !!!</a>
           </div>

    </form>
@endsection
