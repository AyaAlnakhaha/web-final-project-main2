<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','category_id','price','image','description'
    ];

    // one Product has one category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category ? $this->category->name : 'category not found';
    }
    public function getImageLinkAttribute(){
        return $this->image ? url('/storage/'.$this->image) : '';
    }

    public function getProductDisplayDataAttribute(){
        return [
            'photo'=>'<img src="'.$this->image_link.'"/>',
            'name'=>$this->name,
            'category_name'=>$this->category_name,
            'price'=>$this->price,
//            'description'=>$this->description,
            'tools'=>$this->edit.'&nbsp'.$this->delete
        ];
    }

    public function scopeSearch($query,$searchWord)
    {
        return $query->where('id', 'like', "%" . $searchWord . "%")
            ->orWhere('name', 'like', "%" . $searchWord . "%")
            ->orWhere('price', 'like', "%" . $searchWord . "%")
            ->orWhereHas('category',function($query) use($searchWord){
                $query->where('name', 'like', "%" . $searchWord . "%");
            });
    }
    public function getEditAttribute(){
        return '<button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" rel="tooltip" title="Edit '.$this->name.'" onclick="update(\''.route('products.edit',$this->id).'\',this)"><i class="fa fa-edit"></i></button>';
    }
    public function getDeleteAttribute(){
        return '<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" rel="tooltip" title="Delete '.$this->name.'" onclick="deleteItem(\''.route('products.destroy',$this->id).'\')"><i class="fa fa-trash"></i></button>';
    }
}
