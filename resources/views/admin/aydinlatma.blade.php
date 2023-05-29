@extends('adminlte::page')
@section('content_header')
<h1></h1>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Aydınlatma Metni</h3>
        </div>
        <form action="@if(isset($sitesetting)) {{ route('admin.sitesettings.update', ['sitesetting' => $sitesetting]) }} @else {{ route('admin.sitesettings.store') }} @endif" enctype="multipart/form-data" method="POST">
            @csrf
            @if(isset($sitesetting))
            @method('PATCH')
            @else
            @method('POST')
            @endif
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="title">Başlık</label>
                    <input type="text" class="form-control" name="title" placeholder="Örn: Açık Rıza Metni Mayıs 2023" required maxlength="255" value="{{ old('title') ?? ($sitesetting->key ?? "") }}" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="document_text">İçerik</label>
                    <textarea name="document" id="document_text" required>{{ old('document_text') ?? ($sitesetting->content ?? "") }}</textarea>
                    @error('document_text')
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
    CKEDITOR.replace('document_text', {
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
        $('[name="contentPreview"]').val(CKEDITOR.instances.document_text.getData());
        this.submit();
        $('[name="contentPreview"]').val('');
    })
</script>

@endsection

@section('plugins.ckeditor', true)

