<?php

namespace App\Http\Controllers;

use App\Talent\Leaves\Models\LeaveRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\Response;


class LeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return LeaveRequest::query()
        ->when(!empty($request->query('search')),function($query) use ($request){
                $query->where('full_name','LIKE', '%'.$request->query('search').'%');
        })
        ->when(!empty($request->query('start_date') && $request->query('end_date')),function($query) use ($request){
                $query->where(function($query) use ($request) {
                    $query->where('leave_start_date', '>=', $request->query('start_date'))
                        ->where('leave_start_date', '<=', $request->query('end_date'));
                })
                ->orWhere(function($query) use ($request) {
                    $query->where('leave_end_date', '<=', $request->query('start_date'))
                        ->where('leave_end_date', '<=', $request->query('end_date'));
                });
            })
            ->get();

    // SELECT * FROM leave_requests where ( leave_start_date >= $1 and leave_start_date <= $1) or ( leave_end_date <= $1 and leave_end_date <= $1)
    }

    public function store(Request $request)
    {
        $leaveRequest = new LeaveRequest();
        $leaveRequest->setAttribute('form_id', $request->input('Form Id'));
        $leaveRequest->setAttribute('email', $request->input('Email'));
        $leaveRequest->setAttribute('full_name', $request->input('Full Name'));
        $leaveRequest->setAttribute('leave_type', $request->input('What leave do you want to apply for?'));
        $leaveRequest->setAttribute('leave_reason', $request->input('Reason for leave'));
        $leaveRequest->setAttribute('leave_start_date', new Carbon($request->input('Leave Start Date')));
        $leaveRequest->setAttribute('leave_end_date', new Carbon($request->input('Leave End Date')));
        $leaveRequest->setAttribute('leave_approved', $request->input('Approved by Team Leader'));
        $leaveRequest->setAttribute('douments', $request->input('Supporting Documents'));

        

        throw_if(!$leaveRequest->save(), new BadRequestException());


        return new JsonResponse([], Response::HTTP_NO_CONTENT);
    }
    
}
