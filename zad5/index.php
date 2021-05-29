<?php
class Invoice {
    private $product_number;
    private $product_description;
    private $quantity;
    private $pricePerItem;

    public function __construct($product_number,$product_description,$quantity,$pricePerItem){
        $this->setProduct_number($product_number);
        $this->setProduct_description($product_description);
        $this->setQuantity($quantity);
        $this->setPricePerItem($pricePerItem);
    }

    public function Amount(){
        if($this->getQuantity() < 0 || $this->getPricePerItem() < 0){
            return 0;
        }
        return $this->getQuantity() * $this->getPricePerItem();
    }

    public function getProduct_number(){
		return $this->product_number;
	}

	public function setProduct_number($product_number){
		$this->product_number = $product_number;
	}

	public function getProduct_description(){
		return $this->product_description;
	}

	public function setProduct_description($product_description){
		$this->product_description = $product_description;
	}

	public function getQuantity(){
		return $this->quantity;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function getPricePerItem(){
		return $this->pricePerItem;
	}

	public function setPricePerItem($pricePerItem){
		$this->pricePerItem = $pricePerItem;
	}

}
?>


<?php
$A = new Invoice(10,200,3000,4000);
print($A->Amount());
print(" ");
$B = new Invoice(10,10,-300,10);
print($B->Amount());
print(" ");
$C = new Invoice(0,0,10,-300);
print($C->Amount());
print(" ");
?>