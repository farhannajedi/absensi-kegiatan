<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Http\Request;
use App\Models\PresenceDetail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class presenceDetailController extends Controller
{
    public function exportPdf(string $id)
    {
        $presence = Presence::findOrFail($id);
        $presenceDetails = PresenceDetail::where('presence_id', $id)->get();

        // load view to pdf file
        $pdf = Pdf::setOptions(['isRemoteEnable' => true])
        ->loadView('pages.presence.detail.export-pdf', compact('presence', 'presenceDetails'))
        ->setPaper('a4', 'landscape');

        return $pdf->stream("{$presence->tujuan_kegiatan}.pdf", ['Attachment' => 0]);

        exit();
    }

    public function destroy($id)
    {
        $presenceDetail = PresenceDetail::findOrFail($id);

        if($presenceDetail->tanda_tangan) {
            Storage::disk('public_uploads')->delete($presenceDetail->tanda_tangan);
        }

        $presenceDetail->delete();
        
        return response()->json(['status' => 'success', 'message' => 'Data Berhasil Dihapus']);
    }
}