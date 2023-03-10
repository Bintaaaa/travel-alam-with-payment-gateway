@extends('travel-alam.layout')

@section('title')
  Travel Alam - Profil
@endsection

@section('content')
  <!-- Profil Section -->
  <section class="profil" id="profil">
    <div class="container">

      <div class="row mt-5">
        @include('travel-alam.partials.user-menu')
        <div class="col">
          <h4 style="font-size: 20px;">
            <i class="fa fa-user" style="color: #666; margin-right: 10px;">
            </i>{{ $user->nama_depan }}
          </h4>
          <div class="card outer mt-3">
            <div class="card-body">

              <div class="row mb-3">
                <div class="col">
                  <span style="font-size: 18px;">Biodata Diri</span>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  {!! Form::model($user, ['url' => ['profil']]) !!}
                  @csrf

                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="namaDepan">Nama Depan</label>
                        {!! Form::text('nama_depan', null, ['class' => 'form-control', 'required' => true]) !!}
                        @error('nama_depan')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="namaBelakang">Nama Belakang</label>
                        {!! Form::text('nama_belakang', null, ['class' => 'form-control', 'required' => true]) !!}
                        @error('nama_belakang')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        {!! Form::email('email', null, ['class' => 'form-control', 'required' => true, 'placeholder' => 'Email']) !!}
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="noTelepon">Nomor Telepon</label>
                        {!! Form::text('no_telepon', null, ['class' => 'form-control', 'required' => true]) !!}
                        @error('no_telepon')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-success btn-theme float-end mt-3" type="submit">Simpan</button>

                  {!! Form::close() !!}
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Profil Section -->
@endsection
