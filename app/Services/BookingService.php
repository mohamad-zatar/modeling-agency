<?php

namespace App\Services;

use App\Repositories\BookingRepository;

class BookingService
{
    protected $bookingRepository;

    public function __construct(BookingRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    public function getAllBookings()
    {
        return $this->bookingRepository->all();
    }

    public function getBookingById($id)
    {
        return $this->bookingRepository->find($id);
    }

    public function createBooking(array $data)
    {
        return $this->bookingRepository->create($data);
    }

    public function updateBooking($id, array $data)
    {
        return $this->bookingRepository->update($id, $data);
    }

    public function deleteBooking($id)
    {
        return $this->bookingRepository->delete($id);
    }
}
