@extends('backend.layout')
@section('title','Kişiler | Admin')
@section('content')


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kişiler</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                İsim ve Soyisim
                            </th>
                            <th>
                                Doğum Günü
                            </th>
                            <th>
                                Cinsiyeti
                            </th>
                            <th>
                                İşlemler
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data['persons'] as $i)
                            <tr id="item-{{ $i->id }}">
                                <td>{{ $i->id }}</td>
                                <td>{{ $i->name }}</td>
                                <td>@php echo date('d/m/Y', strtotime($i->birthday)) @endphp</td>
                                <td>
                                    @switch($i->gender)
                                        @case('Woman')
                                            Kadın
                                        @break
                                        @case('Man')
                                            Erkek
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    <a href="{{route('person.edit',$i->id)}}"><button  class="btn btn-primary mb-2">Düzenle</button></a>
                                    <a href="javascript:void(0)"><i id="@php echo $i->id; @endphp" class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('css') @endsection
@section('js')

    <script type="text/javascript">


        $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silmek İstediğinizden Emin misiniz?','Bu işlem geri alınamaz.',
                function () {
                    $.ajax({
                        data : {
                          "_token" : "{{csrf_token()}}"
                        },
                        type: "DELETE",
                        url: "person/"+destroy_id,
                        success: function (msg) {
                            if(msg)
                            {
                                $("#item-"+destroy_id).remove();
                                alertify.success("Silme İşlemi Başarılı");
                            } else {
                                alertify.error("Silme İşlemi Başarısız");
                            }
                        }
                    })
                },
                function () {
                    alertify.error('Silme işlemi iptal edildi.')
                }

            )
        });

    </script>

@endsection
