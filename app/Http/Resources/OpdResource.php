<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OpdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function __construct($data)
    {
        parent::__construct($data);
    }

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'kode_skpd' => $this->kode_skpd,
            'uraian_skpd' => $this->uraian_skpd
        ];
    }
}
