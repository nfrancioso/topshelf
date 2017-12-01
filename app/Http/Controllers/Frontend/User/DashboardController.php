<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
      $data['user_stats'] = [
                [
                        'name' => 'Scans',
                        'count' => '4',
                        'color' => 'danger',
                        'icon' => 'fa fa-search'
                ],
                [
                        'name' => 'Keywords',
                        'count' => '435',
                        'color' => 'warning',
                        'icon' => 'fa fa-font'
                ],
                [
                        'name' => 'Unique Jobs',
                        'count' => '3',
                        'color' => 'info',
                        'icon' => 'fa fa-id-card-o'
                ],
                [
                        'name' => 'Rewards',
                        'count' => '22',
                        'color' => 'success',
                        'icon' => 'fa fa-money'
                ]
        ];

        return view('frontend.user.dashboard')->with($data);;
    }
}
