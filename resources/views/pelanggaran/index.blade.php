@extends('template.template')


@section('page-title')
Halaman Pelanggaran
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pelanggaran</div>

                <div class="card-body">
                    <form action="{{route('pelanggaran.store')}}" method="post">
                        @csrf 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >
                                        Jenis Pelanggaran 
                                    </label>
                                    <input type="text" name="jenis_pelanggaran"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >
                                        Hukuman 
                                    </label>
                                    <input type="text" name="hukuman"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>Pelanggaran</th>
                                <th>Hukuman</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->jenis_pelanggaran}}</td>
                                    <td>{{$item->hukuman}}</td>
                                    <td>
                                        <form action="{{route('pelanggaran.destroy',$item->id)}}" method="post">
                                            @csrf
                                            {{method_field('delete')}}
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection