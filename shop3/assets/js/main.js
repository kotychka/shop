$(function() {
	$("body").on("click", ".product-link", function() {
		var id = $(this).attr("data-id");

		$.ajax({
			url: "/add.php?id=" + id,
			success: function (data) {
				$("#cart").html(data)
			}
		});
	});

	$("body").on("click", ".product-rm", function() {
		var id = $(this).attr("data-id");

		$.ajax({
			url: "/remove.php?id=" + id,
			success: function (data) {
				$("#cart").html(data)
			}
		});
	});
})

function render (product) {
	var template = "<div>" + product.title + ", Цена " + product.price + " <a class='product-rm' href='javascript:{}'>удалить</a> </div>"

	return template
}