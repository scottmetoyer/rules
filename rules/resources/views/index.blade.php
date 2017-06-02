@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="table-light">
            <div class="table-header">
                <div class="table-caption">
                    Sequence
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Instrument</th>
                        <th>Pattern</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    <tr is="sequence"></tr>
                </tbody>
            </table>
            <div class="table-footer">
                Footer
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection