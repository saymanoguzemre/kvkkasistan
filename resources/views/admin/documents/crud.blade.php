@extends('adminlte::page')
@section('content_header')
<h1></h1>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Rapor Tanımla</h3>
            {{-- <form id="previewdocument" target="_blank" action="{{ route('documentPreviewAsPDF') }}" enctype="multipart/form-data" method="POST" class="d-inline-block float-right"><textarea type="hidden" name="contentPreview" class="d-none"></textarea> @csrf @method('POST')<button type="submit" class="btn btn-warning" tabindex="0" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="PDF olarak önizle"><i class="fa-solid fa-magnifying-glass"></i></button></form> --}}
        </div>
        <form action="@if(isset($document)) {{ route('admin.documents.update', ['document' => $document]) }} @else {{ route('admin.documents.store') }} @endif" enctype="multipart/form-data" method="POST">
            @csrf
            @if(isset($document))
            @method('PATCH')
            @else
            @method('POST')
            @endif
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="title">Başlık <small>(Bunu sadece siz görürsünüz. Müşterinin önüne çıkmaz)</small></label>
                    <input type="text" class="form-control" name="title" placeholder="Örn: Açık Rıza Metni Mayıs 2023" required maxlength="255" value="{{ old('title') ?? ($document->title ?? "") }}" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="document_type">Döküman Türü</label>
                    <div class="input-group">
                        <select name="document_type" id="document_type" class="form-control" required>
                            @foreach ($document_types as $dt)
                                <option @selected(old('documenttype') == $dt->id || (isset($document) && $document->documenttype->id == $dt->id)) value="{{ $dt->id }}">{{ $dt->documenttype }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('document_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group col-6">
                    <label class="form-label">Durum</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="active" class="custom-control-input" id="customSwitch1" @checked(old('active') ?? ($document->active) ?? "0")>
                        <label class="custom-control-label" for="customSwitch1">Bunu aktif, (varsa) aynı yerdeki önceki Tanımlı Raporu pasif yap.</label>
                    </div>
                    @error('active')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Değişkenleri Gör
                    </button>
                </div>
                <div class="form-group col-12">
                    <label for="document-text">Döküman</label>
                    <textarea name="document" id="document-text" required>{{ old('document') ?? ($document->document ?? "") }}</textarea>
                    @error('document')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <input type="submit" class="btn btn-success px-5">
        </div>
    </form>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Değişkenler</h5>
          <button type="button" class="btn btn-danger btn-close" data-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <p>??SIPARISID??&nbsp;<br>SİPARİŞ ID DEĞİŞKENİ</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('css')

@endsection
@section('js')
<script>
    CKEDITOR.replace('document-text', {
        language: "tr",

        alignment: {
            options: [ 'left', 'right' ]
        },
        /* toolbar: [
            { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
            { name: 'editing', items: [ 'Scayt' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'SpecialChar' ] },
            { name: 'tools', items: [ 'Maximize' ] },
            { name: 'document', items: [ 'Source' ] },
            '/',
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', 'Underline', '-', 'RemoveFormat' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'alignment','align','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'styles', items: [ 'Styles', 'Format' ] },
            { name: 'colors',},
            { name: 'about', items: [ 'About' ] },
        ], */
        wordcount: {
            showParagraphs: false,
            showWordCount: false,
            showCharCount: true,
            countSpacesAsChars: true,
            countHTML: true,
            maxCharCount: 16777215,
            hardLimit: true,
        },
    });
</script>
<script>
    $('#previewdocument').on('submit', function (e) {
        e.preventDefault();
        $('[name="contentPreview"]').val(CKEDITOR.instances.content.getData());
        this.submit();
        $('[name="contentPreview"]').val('');
    })
</script>

@endsection

@section('plugins.ckeditor', true)

