<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function seId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getPerimeter()
    {
        return $this->attributes['perimeter'];
    }

    public function setPerimeter($perimeter)
    {
        $this->attributes['perimeter'] = $perimeter;
    }

    public function getArea()
    {
        return $this->attributes['area'];
    }

    public function setArea($area)
    {
        $this->attributes['area'] = $area;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}