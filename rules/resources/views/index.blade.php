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
                        <th>#</th>
                        <th>Name</th>
                        <th>Instrument</th>
                        <th>Pattern</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <input type="text" class="step"/>
                            <input type="text" class="step"/>
                            <input type="text" class="step"/>
                            <input type="text" class="step"/>
                            <input type="text" class="step"/>
                            <input type="text" class="step"/>
                            <input type="text" class="step"/>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                         <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                         <td></td>
                    </tr>
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