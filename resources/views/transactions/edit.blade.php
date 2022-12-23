@extends('layouts.master')
@section('nama', 'Edit Transaction')
@section('content')
    <h2>Update Data Account</h2>
    <form action="{{ route('transactions.update', ['transaction' => $transaction->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="kategori">KATEGORI</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori"
                    value="{{ old('kategori') ?? $transaction->kategori}}">
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="nominal">Nominal</label>
                        <input type="number" class="form-control @error('nominal') is-invalid @enderror" name="nominal" id="nominal"
                            min="1" max="999999" value="{{ old('nominal') }}">
                        @error('nominal')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="tujuan">Tujuan</label>
                <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan"
                    id="tujuan" value="{{ old('tujuan') ?? $transaction->tujuan }}">
                @error('tujuan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="idaccount">ID Account</label>
            <input type="text" class="form-control @error('idaccount') is-invalid @enderror" name="idaccount"
                id="idaccount" value="{{ old('idaccount') ?? $transaction->account_id }}">
            @error('idaccount')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
    </form>
@endsection
