<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{
    public function index()
    {
        return view('Pages.subscription-plan', [
            'plans' => SubscriptionPlan::all()
        ]);
    }

    public function getPlanData(Request $request)
    {
        return view('modals.plan-modal', [
            'data' => SubscriptionPlan::find($request->id)
        ]);
    }
}
