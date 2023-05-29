<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Document\VariableController;
use App\Http\Requests\DocumentStoreRequest;
use App\Models\Document;
use App\Models\DocumentForm;
use App\Models\Documenttype;
use App\Models\Form;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.documents.index', ['documents' => Document::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documents.crud', ['document_types' => Documenttype::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentStoreRequest $request)
    {
        $document = new Document();
        $document->documenttype_id = $request->document_type;
        $document->title = $request->title;
        $document->document = $request->document;
        if(isset($request->active)) {
            $document->active = 1;
            Document::where('documenttype_id', $request->document_type)->where('active', 1)->where('id', '<>', $document->id)->update(['active' => 0]);
        }
        else
        {
            $document->active = 0;
        }


        if($document->save())
            return redirect()->route('admin.documents.index');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('documents.dompdf.documents', ['bodyContent' => (new VariableController(Form::find(1)))->assign($document->document), 'title' => $document->title]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('admin.documents.crud', ['document_types' => Documenttype::all(), 'document' => $document]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentStoreRequest $request, Document $document)
    {
        $document->documenttype_id = $request->document_type;
        $document->title = $request->title;
        $document->document = $request->document;
        if(isset($request->active)) {
            $document->active = 1;
            Document::where('documenttype_id', $request->document_type)->where('active', 1)->where('id', '<>', $document->id)->update(['active' => 0]);
        }
        else
        {
            $document->active = 0;
        }


        if($document->save())
            return redirect()->route('admin.documents.index');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('admin.documents.index');
    }

    public function download($referenceNo, $documentId)
    {
        $form = Form::where('referenceNo', $referenceNo)->first();
        if(!$form)
            abort(404);
        if(DocumentForm::where('form_id', $form->id)->where('document_id', $documentId)->count())
        {
            $document = Document::find($documentId);
            $pdf = $this->makePdf($form, $document);
            return $pdf->download($document->documenttype->documenttype.'.pdf');
        }

        return abort(404);
    }

    public function stream($referenceNo, $documentId)
    {
        $form = Form::where('referenceNo', $referenceNo)->first();
        if(!$form)
            abort(404);
        if(DocumentForm::where('form_id', $form->id)->where('document_id', $documentId)->count())
        {
            $document = Document::find($documentId);
            $pdf = $this->makePdf($form, $document);
            return $pdf->stream($document->documenttype->documenttype.'.pdf');
        }

        return abort(404);
    }

    public function makePdf(Form $form, Document $document): PDF
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('documents.dompdf.documents', ['bodyContent' => (new VariableController($form))->assign($document->document), 'title' => $document->title]);
        return $pdf;
    }

    public function preview(Request $request)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('documents.dompdf.documents', ['bodyContent' => $request->contentPreview, 'title' => 'Önizleme']);
        return $pdf->stream();
    }
}
