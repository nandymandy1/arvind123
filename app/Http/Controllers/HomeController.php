<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Charts;
use App\BiMonthlyCuttingKpi as BCKPI;
use App\BiMonthlyStrengthKpi as BSKPI;
use App\DailyCuttingKpi as CKPI;
use App\DailySewingKpi as SKPI;
use App\DailyFinishingKpi as FKPI;
use App\DailyStrengthKpi as SN;
use App\DailyQualityKpi as QKPI;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');
        // Overriddng the default login access type

        if(Auth::user()->active)
        {
          // If the user is active
          // Check for the admin
          if(Auth::user()->type == 'admin')
          {
            // then check for Job Type QA or Superadmin
            if(Auth::user()->job == 'super')
            {
              // redirect to Super Admin page
              $redirect = 'admin.superadmin';
            }
            else
            {
              // redirect to QA page
              $redirect = 'admin.qa';
            }
          }
          else{
            $fid = Auth::user()->factory_id;
            // then check for Job type Cutting finishing quality sewing strength or master
            if(Auth::user()->job == 'cutting')
            {
              $redirect = 'factory.cutting';
            }
            elseif(Auth::user()->job == 'sewing')
            {
              $redirect = 'factory.sewing';
            }
            elseif (Auth::user()->job == 'finishing')
            {
              $redirect = 'factory.finishing';
            }
            elseif (Auth::user()->job == 'quality') {
              $redirect = 'factory.quality';
            }
            elseif (Auth::user()->job == 'master') {
              $redirect = 'factory.master';
            }
            elseif (Auth::user()->job == 'strength') {
              $redirect = 'factory.strength';
            }
            else{
              $redirect = 'services.nojob';
            }
          }
        }
        else{
          // If the user is not active
          $redirect = 'services.noauth';
        }
        return view($redirect);
    }
}
