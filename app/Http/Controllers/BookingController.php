<?php

namespace App\Http\Controllers;

use App\Http\Requests\Booking\StoreBookingRequest;
use App\Http\Requests\Booking\UpdateBookingRequest;
use App\Http\Resources\BookingResource;
use App\Services\BookingService;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function index()
    {
        $bookings = $this->bookingService->getAllBookings();
        return BookingResource::collection($bookings);
    }

    public function show($id)
    {
        $booking = $this->bookingService->getBookingById($id);
        return new BookingResource($booking);
    }

    public function store(StoreBookingRequest $request)
    {
        $booking = $this->bookingService->createBooking($request->validated());
        return new BookingResource($booking);
    }

    public function update(UpdateBookingRequest $request, $id)
    {
        $booking = $this->bookingService->updateBooking($id, $request->validated());
        return new BookingResource($booking);
    }

    public function destroy($id)
    {
        $this->bookingService->deleteBooking($id);
        return response()->json('Successfully Deleted');
    }
}
