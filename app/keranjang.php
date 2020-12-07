<?php

namespace App;


class keranjang
{
    public $items;
    public $totalQty = 0;
    public $totalharga = 0;

    public function __construct($oldcart)
    {
        if ($oldcart){
            $this->items = $oldcart->items;
            $this->totalQty = $oldcart->totalQty;
            $this->totalharga = $oldcart->totalharga;

        }
    }

    public function tambah($item, $id){
        $simpanitem = ['qty' => 0, 'harga' => $item->harga, 'item' => $item ];
        if ($this->items){
            if (array_key_exists($id, $this->items)){
                $simpanitem = $this->items[$id];
            }
        }
        $simpanitem['qty']++;
        $simpanitem['harga'] = $item->harga * $simpanitem['qty'];
        $this->items[$id] = $simpanitem;
        $this->totalQty++;
        $this->totalharga += $item->harga;

    }
    public function hapus_item($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalharga -= $this->items[$id]['harga'];
        unset($this->items[$id]);
    }
}
