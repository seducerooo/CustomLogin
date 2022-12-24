@extends('layouts.authpanel')
@section('content')
    <form action="" method="POST">
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

                       </div>




                       <hr>

                       <div class="col-12 ">
                                                            <!--    -->
                                                       <!-- email Input -->
                                                            <!--    -->
                           <label for="staticEmail" class="col-sm-2 col-form-label">Email :</label>
                           <div class="col-sm-10 form-control">
                               <input
                                   type="email"
                                   class="form-control-plaintext"
                                   id="staticEmail"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="enter your email ...">
                           </div>
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
           </div>
    </form>
@endsection
