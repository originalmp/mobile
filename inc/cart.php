<style>
.mini-cart-overlay .mini-cart-content {
    padding: 16px 10px;
    background: #fff;
    border: 1px solid #d9d9d9;
    -webkit-box-shadow: 0 0 4px 1px rgba(0,0,0,.18);
    box-shadow: 0 0 4px 1px rgba(0,0,0,.18);
}
.mini-cart-overlay {
    position: absolute;
    right: 7px;
    text-align: left;
    width: 280px;
    z-index: 999;
    padding-top: 10px;
    top: 48px;
}

.mini-cart-content::before {
    content: "";
    width: 0px;
    height: 0px;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    border-bottom: 20px solid #ffffff;
    top: -8px;
    position: absolute;
    right: 5px;
}
div#view-cart {
    background: #ffdd00;
    line-height: 35px;
    width: 90%;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
	    margin-top: 10px;
		
    display: inline-block;
}
h3.legend {
    border-bottom: 1px solid #d9d9d9;
    color: #383838;
    font-size: 14px;
    line-height: 20px;
    padding-bottom: 10px;
    text-transform: uppercase;
    vertical-align: top;
    margin-top: 0px;
    font-weight: 600;
}
a#viewCart {
    text-decoration: none;
    color: #006cdb;
    font-weight: bold;
}
img.primary-image {
    height: auto;
    width: 60px;
    float: left;
}.itemAdditionals
img.primary-image {
    height: auto;
    width: 60px;
    float: left;
    margin-right: 10px;
}
ul.itemList {
    padding: 0;
}
li.popupCartItem {
    list-style: none;
    display: inline-block;
    position: relative;
    width: 100%;
	border-bottom: 1px solid #d9d9d9;
}
span.label {
    color: #0a0a0a;
    font-size: 12px;
}
.itemDetail .itemName {
    color: #383838;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 13px;
    line-height: .938rem;
    margin-bottom: 5px;
    max-width: 120px;
    white-space: normal;
    vertical-align: top;
    word-break: break-word;
}
.itemQuantity {
    float: left;
}
.itemPrice {
    float: right;
}
.itemAdditionals {
    width: 50%;
    float: right;
	    margin-bottom: 10px;
}
.links {
    text-align: center;
}
a#miniCartContinueShopping {
    float: left;
    font-weight: 600;
    color: #383838;
}
.total {
    font-weight: 600;
    border-bottom: 1px solid #d9d9d9;
    padding-bottom: 10px;
    margin-bottom: 10px;
}
.total span.right {
    float: right;
}
</style>


 <!-- START of Body  -->
  <h3 class="legend">
		Recently added to your cart</h3>
	<input type="hidden" class="totalQty" value="1">
<ul class="itemList">
	<li class="popupCartItem">
			<div class="itemDesc">
				<div class="itemDetail">
                    <a href="#" tabindex="0" title="Acer Predator Helios">
                        <div class="itemThumb">
                            <img class="primary-image" data-itemprop="image" src="./images/product.jpg" title="Acer Predator Helios" alt="">
                            </div>
                        <span class="itemName text-overflow-ellipsis truncate">Acer Predator Helios G3-572-72YF 15.6” Gaming Laptop with Intel® i7-7700HQ, 1TB HDD, 256GB SSD, 16GB </span>
                    </a>
				</div>
				<div class="itemAdditionals">
					<div class="itemQuantity"><span class="label">Qty:</span>1</div>
                    <div class="itemPrice">$19<span>.99</span></div>
				</div>
				</div>
		</li>
	</ul>
<div class="total">
	Total&nbsp;
    <span class="right">
        $19<span>.99</span></span>
</div>



<div class="links">
	<a href="#" id="miniCartContinueShopping" class="button  continue-shopping-link">&lt; Continue Shopping</a>
	<div id="view-cart"><a href="#" id="viewCart" class="button primary-button">View cart</a></div>
</div>
  <!-- END of Body -->