<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Product */
class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image' => $this->image,
            'brand' => $this->brand,
            'description' => $this->description,
            'title' => $this->title,
            'status' => $this->status,
            'price' => $this->price,
        ];
    }
}
