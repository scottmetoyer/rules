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
                        <th>Func</th>
                    </tr>
                </thead>
                <tbody>
                    <tr is="sequence" v-for="sequence in sequences"></tr>
                </tbody>
            </table>
            <div class="table-footer">
                <div class="pull-right">
                    <button type="button" class="btn btn-xs btn-outline btn-outline-colorless" @click="addSequence">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>

</script>
@endsection