<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,  // Gets the 'id' property of the object
            'name' => $this->user->name,  // Gets the 'name' property from the related 'user' object
            'payment_type' => $this->paymentType->name,  // Gets the 'name' property from the related 'paymentType' object
            'account_name' => $this->account_name,  // Gets the 'account_name' property of the object
            'account_no' => $this->account_no,  // Gets the 'account_no' property of the object
            'amount' => $this->amount,  // Gets the 'amount' property of the object
            'status' => $this->status === 0 ? 'Pending' : ($this->status === 1 ? 'Success' : 'Reject'),  // Converts the 'status' property to a human-readable string
            'message' => $this->message,  // Gets the 'message' property of the object
            'datetime' => $this->created_at->format('Y-m-d H:i:s'),  // Formats the 'created_at' property as a string
        ];
    }
}
