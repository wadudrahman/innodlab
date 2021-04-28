<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function showPackageManagementView()
    {
        return view('packageManagement');
    }

    public function showAddPackageView()
    {
        return view('addPackage');
    }

    public function addPackage(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|unique:packages,title',
                'designCount' => 'required|numeric',
                'pricePerDesign' => 'required|numeric',
                'iconClass' => 'nullable|string',
                'isTrailAvailable' => 'nullable|string',
                'trailDaysCount' => 'nullable',
                'trailDesignCount' => 'nullable',
                'status' => 'required|numeric',
                'fileStoragePeriod' => 'required|numeric',
                'multipleRevision' => 'nullable',
                'receiveAtEmail' => 'nullable',
                'addonEmailCount' => 'nullable|numeric',
                'sameDayDelivery' => 'nullable',
                'openRegistration' => 'nullable',
            ]
        );

        $data['title'] = trim($request->title);
        $data['design_count'] = (int) trim($request->designCount);
        $data['price_per_design'] = (float) trim($request->pricePerDesign);
        if ($request->isTrailAvailable === 'on') {
            $data['is_trail_available'] = 1;
            $data['trial_period_day_count'] = (int) trim($request->trailDaysCount);
            $data['trial_period_design_count'] = (int) trim($request->trailDesignCount);
        }
        $data['is_active'] = ($request->status) ? 1 : 0;
        $data['file_stored_day_count'] = (int) trim($request->fileStoragePeriod);
        $data['is_multiple_revisions'] = ($request->multipleRevision) ? 1 : 0;
        $data['is_via_email_allowed'] = ($request->receiveAtEmail) ? 1 : 0;
        $data['addon_email_count'] = (int) trim($request->addonEmailCount);
        $data['is_same_day_delivery'] = ($request->sameDayDelivery) ? 1 : 0;
        $data['is_displayed'] = ($request->openRegistration) ? 1 : 0;
        $data['icon_class'] = trim($request->iconClass);
//        $data['created_by'] = auth()->id();

        try {
            Package::create($data);
            session()->flash('success_message', __('Package Added Successfully.'));

            return redirect()->to('/packageManagement');
        } catch (\Exception $exception) {
            session()->flash('danger_message', __('Package Add Failed.' . $exception->getMessage()));

            return redirect()->back();
        }
    }

}
