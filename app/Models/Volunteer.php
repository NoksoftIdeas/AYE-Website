<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'skills',
        'interest_areas',
        'message',
        'status',
    ];

    /**
     * Scope a query to only include pending volunteers.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope a query to only include approved volunteers.
     */
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    /**
     * Approve the volunteer application.
     */
    public function approve()
    {
        $this->update(['status' => 'approved']);
    }

    /**
     * Reject the volunteer application.
     */
    public function reject()
    {
        $this->update(['status' => 'rejected']);
    }
}
