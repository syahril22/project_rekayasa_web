@extends('layouts.app')

@section('title', 'About')
@section('content')
 <div class="row justify-content-center">
            <div class="col-md-12">

             <div class="profile-wrapper">

            <div class="profile-card">

                <!-- Header -->
                <div class="profile-header">

                    <img
                        src="{{ asset('img/profile.JPG') }}"
                        class="rounded-circle profile-image"
                        alt="Foto Mahasiswa">

                    <h3 class="profile-name">
                        {{ $mahasiswa['nama'] }}
                    </h3>

                    <p class="profile-subtitle">
                        Mahasiswa Universitas Pamulang
                    </p>

                    <span class="status-badge">
                        {{ $mahasiswa['status'] }}
                    </span>

                </div>


                <!-- Body -->
                <div class="profile-body">

                    <h5 class="section-title">
                        Informasi Mahasiswa
                    </h5>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="info-box">
                                <span class="info-label">
                                    Nomor Induk Mahasiswa
                                </span>

                                <span class="info-value">
                                    {{ $mahasiswa['nim'] }}
                                </span>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="info-box">
                                <span class="info-label">
                                    Program Studi
                                </span>

                                <span class="info-value">
                                    {{ $mahasiswa['prodi'] }}
                                </span>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="info-box">
                                <span class="info-label">
                                    Perguruan Tinggi
                                </span>

                                <span class="info-value">
                                    {{ $mahasiswa['kampus'] }}
                                </span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
            </div>

        </div>

@endsection
