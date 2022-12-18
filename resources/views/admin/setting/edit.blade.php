@extends('layouts.app')

@section('title', 'Setting')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Setting</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">Setting</div>
                </div>
            </div>
            <div class="section-body">
                <form action="{{ route('setting.edit') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="card" id="settings-card">
                        <div class="card-header">
                            <h4>General Settings</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Social Media Setting</p>

                            <div class="form-group row align-items-center">
                                <label for="facebook" class="form-control-label col-sm-3 text-md-right">Facebook</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="facebook" id="facebook"
                                        class="form-control @error('facebook') is-invalid @enderror"
                                        value="{{ old('facebook') ?? $setting->facebook }}"
                                        placeholder="https://facebook.com/username">
                                    @error('facebook')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label for="twitter" class="form-control-label col-sm-3 text-md-right">Twitter</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="twitter" id="twitter"
                                        class="form-control @error('twitter') is-invalid @enderror"
                                        value="{{ old('twitter') ?? $setting->twitter }}"
                                        placeholder="https://twitter.com/username">
                                    @error('twitter')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label for="instagram" class="form-control-label col-sm-3 text-md-right">Instagram</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="instagram" id="instagram"
                                        class="form-control @error('instagram') is-invalid @enderror"
                                        value="{{ old('instagram') ?? $setting->instagram }}"
                                        placeholder="https://instagram.com/username">
                                    @error('instagram')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label for="youtube" class="form-control-label col-sm-3 text-md-right">YouTube</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="youtube" id="youtube"
                                        class="form-control @error('youtube') is-invalid @enderror"
                                        value="{{ old('youtube') ?? $setting->youtube }}"
                                        placeholder="https://youtube.com/username">
                                    @error('youtube')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <p class="text-muted">Contact Setting</p>
                            <div class="form-group row align-items-center">
                                <label for="email" class="form-control-label col-sm-3 text-md-right">Email</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') ?? $setting->email }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="phone" class="form-control-label col-sm-3 text-md-right">Phone</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="phone" id="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') ?? $setting->phone }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="address" class="form-control-label col-sm-3 text-md-right">Address</label>
                                <div class="col-sm-6 col-md-9">
                                    <textarea type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror">{{ old('address') ?? $setting->address }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="about" class="form-control-label col-sm-3 text-md-right">About Us</label>
                                <div class="col-sm-6 col-md-9">
                                    <textarea type="text" name="about" id="about" class="form-control @error('about') is-invalid @enderror">{{ old('about') ?? $setting->about }}</textarea>
                                    <small class="text-muted">Meta Deskripsi max 150 karakter</small>
                                    @error('about')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <p class="text-muted">Site Meta</p>
                            <div class="form-group row align-items-center">
                                <label for="desc" class="form-control-label col-sm-3 text-md-right">Site
                                    Descriptions</label>
                                <div class="col-sm-6 col-md-9">
                                    <textarea type="text" name="desc" id="desc" class="form-control @error('desc') is-invalid @enderror">{{ old('desc') ?? $setting->desc }}</textarea>
                                    <small class="text-muted">Meta Deskripsi max 150 karakter</small>
                                    @error('desc')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="analytic" class="form-control-label col-sm-3 text-md-right">Google
                                    Analytic</label>
                                <div class="col-sm-6 col-md-9">
                                    <textarea type="text" name="analytic" id="analytic"
                                        class="form-control @error('analytic') is-invalid @enderror">{{ old('analytic') ?? $setting->analytic }}</textarea>
                                    <small class="text-muted">Pastikan untuk mencopy semuanya termasuk tag script <a
                                            href="https://support.google.com/analytics/answer/1008080?hl=en">Pelajari
                                            disini</a></small>
                                    @error('analytic')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="keyword" class="form-control-label col-sm-3 text-md-right">Keyword</label>
                                <div class="col-sm-6 col-md-9">
                                    <input type="text" name="keyword" id="keyword"
                                        class="form-control @error('keyword') is-invalid @enderror"
                                        value="{{ old('keyword') ?? $setting->keyword }}">
                                    <small class="text-muted">Masukkan keyword yang anda incar dipisah dengan koma</small>
                                    @error('keyword')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="gmap" class="form-control-label col-sm-3 text-md-right">Google
                                    Maps</label>
                                <div class="col-sm-6 col-md-9">
                                    <textarea type="text" name="gmap" id="gmap" class="form-control @error('gmap') is-invalid @enderror">{{ old('gmap') ?? $setting->gmap }}</textarea>
                                    <small class="text-muted">Pastekan emded dari google maps</small>
                                    @error('gmap')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <p class="text-muted">Comment Plugin by Disqus</p>
                            <div class="form-group row align-items-center">
                                <label for="disqus" class="form-control-label col-sm-3 text-md-right">Disqus
                                    Plugin</label>
                                <div class="col-sm-6 col-md-9">
                                    <textarea type="text" name="disqus" id="disqus" class="form-control @error('disqus') is-invalid @enderror"
                                        placeholder="https://yourdomain.disqus.com/embed.js">{{ old('disqus') ?? $setting->disqus }}</textarea>
                                    <small class="text-warning">Pastikan telah mendaftar pada website <a
                                            href="https://disqus.com/profile/signup/intent/">Disqus.com</a> untuk
                                        menggunakan fitur ini, </small>
                                    <small class="text-danger">(PENTING : Hanya copy url .js nya saja tidak semua)<a
                                            href="https://disqus.com/admin/universalcode/"> Pelajari disini</a></small>
                                    @error('disqus')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="card-footer bg-whitesmoke text-md-right">
                            <button class="btn btn-primary" type="submit" id="save-btn">Save Changes</button>
                            <button class="btn btn-secondary" type="button">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
