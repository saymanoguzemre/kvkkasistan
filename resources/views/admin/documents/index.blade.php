@extends('adminlte::page')
@section('title', 'Dokümanlar')
@section('content_header')
    <h1></h1>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Dokümanlar</h3> <a class="btn btn-success float-right"
                href="{{ route('admin.documents.create') }}">Ekle</a>
        </div>
        <div class="card-body">
            <table id="document-table" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="col-2">Başlık</th>
                        <th class="col-5">İçerik</th>
                        <th class="col-1">Tür</th>
                        <th class="col-1">Durum</th>
                        <th class="col-1">Oluşturma Tarihi</th>
                        <th class="col-1">Güncelleme Tarihi</th>
                        <th class="col-1">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                        <tr>
                            <td>{{ $document->title }}</td>
                            <td><div style="height: 80px; overflow-y: scroll">{!! $document->document !!}</div></td>
                            <td>{{ $document->documenttype->documenttype }}</td>
                            <td>{!! $document->active == 1 ? "<span class='badge badge-success'>Aktif</span>" : "<span class='badge badge-danger'>Pasif</span>" !!}</td>
                            <td data-sort="{{ strtotime($document->created_at) }}">{{ !empty($document->created_at) ? $document->created_at->format('d.m.Y H:i') : "-" }}</td>
                            <td data-sort="{{ strtotime($document->updated_at) }}">{{ !empty($document->updated_at) ? $document->updated_at->format('d.m.Y H:i') : "-" }}</td>
                            <td>
                                {{-- @if ($document->is_default == 0)
                                    <x-action-button :method="'PATCH'" :action="route('toggledocument', ['document' => $document->id, 'status' => 1])" :icon="'fas fa-check'" :color="'success'" :hoverText="'Aktif et'" :buttonText="'<i class=\'fa-solid fa-toggle-off\'></i>'"></x-action-button>
                                @else
                                    <x-action-button :method="'PATCH'" :action="route('toggledocument', ['document' => $document->id, 'status' => 0])" :icon="'fas fa-times'" :color="'warning'" :hoverText="'Pasif hale getir'" :buttonText="'<i class=\'fa-solid fa-toggle-on\'></i>'"></x-action-button>
                                @endif --}}
                                <x-action-button :method="'GET'" :action="route('admin.documents.edit', $document->id)" :icon="'fas fa-trash-alt'" :color="'primary'" :hoverText="'Düzenle'"  :buttonText="'<i class=\'fa fa-edit\'></i>'"></x-action-button>
                                <form style="margin-bottom: 3px;" class="d-inline-block action-button action-button-delete" action="{{ route('admin.documents.destroy', $document->id) }}" method="POST" enctype="multipart/form-data" tabindex="0" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Sil">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-can" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="col-2">Başlık</th>
                        <th class="col-5">İçerik</th>
                        <th class="col-1">Tür</th>
                        <th class="col-1">Durum</th>
                        <th class="col-1">Oluşturma Tarihi</th>
                        <th class="col-1">Güncelleme Tarihi</th>
                        <th class="col-1">İşlemler</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@section('plugins.datatables', true)
@section('plugins.swal', true)
@section('js')
    <script>
        $(function() {
            $('#document-table').DataTable({
                "language": {
                    "url": "{{ asset('vendor/datatables/i18n/tr.json') }}",
                },
                "buttons": ["copy", "colvis"],
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            })
            $('.action-button-delete').on('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                title: 'Silmek istediğinize emin misiniz?',
                showDenyButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Evet',
                denyButtonText: 'Hayır',
                confirmButtonColor: '#1e7e34',
                }).then((result) => {

                if (result.isConfirmed) {
                    $(this).off('submit').submit();
                } else if (result.isDenied) {
                    return false;
                }
                })
            });
        });
    </script>

@endsection
