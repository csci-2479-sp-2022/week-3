<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'release_year',
        'completed,'
    ];

    public function completedYesNo(): bool
    {
        return $this->completed ? 'Yes' : 'No';
    }
}
