@extends('layouts.app')

@section('page-titile', 'Clothes index')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Type</th>
                      <th scope="col">Color</th>
                      <th scope="col">Size</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($lista_vestiti as $clothe)
                          <tr>
                            <td>{{ $clothe->Id }}</td>
                            <td>{{ $clothe->Type }}</td>
                            <td>{{ $clothe->Color }}</td>
                            <td>{{ $clothe->Size }}</td>
                          </tr>
                      @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
