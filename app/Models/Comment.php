<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

     /**
     * COMMENT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['description'] - string - contains the description of the comment
     * $this->attributes['product_id'] - int - contains the product id foreign key
     * this->attributes['created_at'] - string - contains the date of creation of the comment
     * this->attributes['updated_at'] - string - contains the date of update of the comment
    */

    protected $fillable = ['description', 'product_id'];

    //GETTERS
    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function getProductId(): int
    {
        return $this->attributes['product_id'];
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }

    //SETTERS
    public function setDescription(string $description): void
    {
        $this->attributes['description'] = $description;
    }
}
