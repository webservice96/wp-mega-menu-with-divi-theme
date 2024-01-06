(function ($) {
	"use strict";

	$(document).ready(function () {
		/**
		 * mega menu dropdown show hide
		 */
		if ($(window).width() > 768) {
			/** for desktop */
			$(".nav-dropdown.w-dropdown").hover(
				function () {
					const dropdownList = $(this).find(".nav-dropdown-list");
					dropdownList
						.stop()
						.css({ display: "block" })
						.animate({ opacity: 1 }, 100);
				},
				function () {
					const dropdownList = $(this).find(".nav-dropdown-list");
					dropdownList
						.stop()
						.animate({ opacity: 0 }, 100, function () {
							$(this).css("display", "none");
						});
				}
			);
			$(".nav-dropdown-list").hover(
				function () {
					$(this).stop().css({ display: "block", opacity: 1 });
				},
				function () {
					$(this)
						.stop()
						.animate({ opacity: 0 }, 300, function () {
							$(this).css("display", "none");
						});
				}
			);
		} else {
			/** for mobile */
			$(".nav-dropdown.w-dropdown").on("click", function () {
				const dropdownList = $(this).find(".nav-dropdown-list");
				dropdownList
					.stop()
					.toggleClass("regicorp-mobile-mega-open", 100);
			});
		}

		/**
		 * search show hide
		 */
		$(".amq-mega-menu-s-icon").on("click", function () {
			let megaNavSearchIconEl = $("#regicorp-mega-nav");

			// Add $(this) to the jQuery object
			megaNavSearchIconEl = megaNavSearchIconEl.add($(this));

			megaNavSearchIconEl
				.fadeIn("fast")
				.animate({ "margin-bottom": "-88px" }, "fast", function () {
					$(this).css("display", "none");
				})
				.promise()
				.done(function () {
					$(".regicorp-search, .amq-mega-menu-close-icon")
						.fadeIn("fast")
						.animate({ "margin-top": "0" }, "fast");
				});
		});

		$(".amq-mega-menu-close-icon").on("click", function () {
			let megaNavSearchCloseIconEl = $(".regicorp-search");

			// Add $(this) to the jQuery object
			megaNavSearchCloseIconEl = megaNavSearchCloseIconEl.add($(this));

			megaNavSearchCloseIconEl
				.animate({ "margin-top": "-88px" }, "fast", function () {
					$(this).css("display", "none");
				})
				.promise()
				.done(function () {
					$("#regicorp-mega-nav, .amq-mega-menu-s-icon")
						.fadeIn("fast")
						.animate(
							{ "margin-bottom": "0px" },
							"fast",
							function () {
								$(this).css("display", "block");
							}
						);
				});
		});

		/**
		 * mobile menu show hide
		 */
		$(".regicorp-mobile-menu-icon").on("click", function () {
			$(".regicorp-mega-header").toggleClass("regicorp-mobile-header");
			$(this).toggleClass("mb-mega-menu-opener-btn");
			$("#regicorp-mega-nav").toggleClass("mega-nav-open");
		});
	});
})(jQuery);
