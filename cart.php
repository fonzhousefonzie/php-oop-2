<?php

class Cart
{
  protected $products = [];

  public function addItem($item)
  {
    $this->products[] = $item;
  }

  public function removeItem($item)
  {
    array_splice($this->products, array_search($item, $this->products), 1);
  }

  public function getTotal()
  {
    $itemsPrices = [];
    foreach($this->products as $item){
        $itemsPrices[] = $item["price"];
    }
    return array_sum($itemsPrices);
  }
}