let customSlidingText = (intervalLength) => {
	console.log("custom text");
	let titles = [...document.querySelectorAll(".customSlidingText h1")];
	if (titles.length >= 1) {
		//   Index of slide
		let index = 0;
		//     Slide function, uses css animation
		let slide = (item) => {
			console.log("sliding");
			item.style.display = "block";
			item.style.animationDuration = `${intervalLength}ms`;
			item.style.animationName = "slide";
			// Hide frame
			setTimeout(() => (item.style.display = "none"), intervalLength);
		};
		let interval = setInterval(() => {
			let text = titles[index++];
			if (text) {
				slide(text);
			} else {
				index = 0;
				text = titles[index++];
				slide(text);
			}
		}, intervalLength);
	}
};
document.addEventListener("DOMContentLoaded", () => customSlidingText(3000));

let wrapper = document.querySelector("#split-screen-wrapper");
if (wrapper) {
	let layers = [...wrapper.querySelectorAll(".layer")];
	let topLayer = wrapper.querySelector(".skewed .top");
	let forms = [...wrapper.querySelectorAll("form")];

	layers.forEach((layer, index) => {
		// Identify which of the layers to manipulate
		let next = index > 0 ? 0 : 1;

		let contentBody = layers[next].querySelector(".content-body");
		let heading = layer.querySelector(".heading");
		let content = layer.querySelector(".content");
		// let layerForm = layer.querySelector("form");
		// let title = layer.querySelector(".title");
		// let underline = title.querySelector(".underline");

		layer.addEventListener("mouseenter", (e) => {
			let top = [...e.target.classList].includes("top");
			// underline.style.width = "100%";
			// Make the opposite side's opacity 0
			contentBody.style.opacity = 0;
			// layerForm.style.opacity = 1;
			if (top) {
				// If the item selected is the top layer grow it
				return (topLayer.style.width = "85vw");
			}
			// If the item selected is not the top layer shrink it

			return (topLayer.style.width = "15vw ");
		});

		layer.addEventListener("mouseleave", () => {
			// underline.style.width = "0";
			topLayer.style.width = "50vw";

			//     Set all layers' content-body to 100% opacity as a cover all solution to the mouse leaving
			layers.forEach(() => {
				contentBody.style.opacity = 1;
			});
			// forms.forEach((form) => {
			// 	form.style.opacity = 0;
			// });
		});
	});
}
// Hilight Links
let delay = 1000;
let hilight = (item) => {
	item.classList.add("hilight");
	setTimeout(() => item.classList.remove("hilight"), delay);
};
let techNodeArray = [...document.querySelectorAll(".tech")];

if (techNodeArray.length > 1) {
	let index = 0;
	let maxIndex = techNodeArray.length;

	let interval = setInterval(() => {
		if (index > maxIndex) {
			index = 0;
		}
		hilight(techNodeArray[`${index++}`]);
	}, delay);
}
// Hilight text
let htags = [
	...document.querySelectorAll("h1"),
	...document.querySelectorAll("h2"),
	...document.querySelectorAll("h3"),
	...document.querySelectorAll("h4"),
	...document.querySelectorAll("h5"),
	...document.querySelectorAll("h6"),
];

htags.forEach((item) => {
	let words = [...item.innerText.match(/\w+/gim)];
	let res = words.map((word, index) => {
		if (index >= words.length / 2) {
			return `<span class='heading-hilight'>${word}</span>`;
		}
		return word;
	});
	item.innerHTML = res.join(" ");
});
