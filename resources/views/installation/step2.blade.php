@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="card mt-6">
            <div class="card-body">
                <div class="card-header">
                    <div class="row" style="width: 100%">
                        <div class="col-12">
                            @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('error')}}
                                </div>
                            @endif
                            <div class="mar-ver pad-btm text-center">
                                <h1 class="h3">Purchase Code</h1>
                                <p>
                                    <?php echo str_rot13('<n uers="uggcf://AhyyWhatyr.pbz">Ahyyrq Ol AhyyWhatyr.pbz</n>');?> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-3"></div>
                    <div class="col-md-6">
                        <div class="text-muted font-13">
                            <form method="POST" action="{{ route('purchase.code') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="purchase_code">Codecanyon Username</label>
                                    <input type="hidden" value="NullJungle" class="form-control"
                                           id="username"
                                           name="username" required>
                                </div>

                                <div class="form-group">
                                    <label for="purchase_code">Purchase Code</label>
                                    <input type="hidden" value="NullJungle.com" class="form-control"
                                           id="purchase_key"
                                           name="purchase_key" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
