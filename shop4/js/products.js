// эта функция вызывается в момент клика по ссылке
function addToCart(elem) {
	var id = $(elem).attr("data-id"); // получаем идентификатор продукта из специального атрибута у тега
	var title = $(elem).attr("data-title");

	var count = $("#cart-product-"+id).text()

	if (count) {
		$("#cart-product-"+id).text(parseInt(count) + 1)
	} else {
		$("#cart ul").append("<li>"+title
		+"(<span id='cart-product-"+id+"'>1</span>) <a href='#' id='remove-"+id+"' class='remove-from-cart'>Remove</a></li>")
	}
}


$(function(){

	$("#cart-holder").on("click", ".remove-from-cart", function() {
		$(this).parent().remove()
	})

})