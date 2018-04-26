<?php

namespace App\Http\Transformers;

abstract class Transformer {

    public function transformCollection($items) 
    {
    	if(is_object($items))
    	{
    		return array_map([$this, 'transform'], $items->toArray());
    	}

    	return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);
    
    public function nulltoBlank($data)
    {
        return $data ? $data : '';
    }
}
