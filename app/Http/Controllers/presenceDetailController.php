<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Http\Request;
use App\Models\PresenceDetail;
use Illuminate\Support\Facades\Storage;

class presenceDetailController extends Controller
{
    public function destroy($id)
    {
        $presenceDetail = PresenceDetail::findOrFail($id);

        if($presenceDetail->tanda_tangan) {
            Storage::disk('public_uploads')->delete($presenceDetail->tanda_tangan);
        }

        $presenceDetail->delete();
        
        return redirect()->back();
    }
}