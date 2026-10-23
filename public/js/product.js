// https:153.127.69.211/ecc/sfukusima/std_app1/products/
const apiURL = "http://153.127.69.211/ecc/sfukusima/std_app1/products/";
const productList = document.querySelector(".product_list");
const deskMaxLength = 18;
const titleMaxLength = 12;

async function getAPI() {
    try {
        const response = await fetch(apiURL);
        const apiData = await response.json();
        console.log(apiData);
        renderHTML(apiData);
    } catch (error) {
        console.log(error);
    }
}

function renderHTML(data) {
    data.map((d) => {
        const newTags = JSON.parse(d.product_skill);
        const description =
            d.product_desc.length <= deskMaxLength
                ? d.product_desc
                : d.product_desc.slice(0, deskMaxLength) + "...";
        const title =
            d.product_title.length <= titleMaxLength
                ? d.product_title
                : d.product_title.slice(0, titleMaxLength) + "...";

        console.log(newTags);
        productList.insertAdjacentHTML(
            "beforeend",
            `
                <div class="shadow-xl rounded-md">
                    <img
                        src="../img/img-default.png"
                        alt="${title}のサムネイル"
                        class="bg-gray-300 w-80 h-60 my-0 rounded-t-md"
                    />
                    <div class="flex flex-col gap-1 p-6">
                        <h2 class="text-lg font-bold">${title}</h2>
                        <p class="text-sm">
                            ${description}
                        </p>
                        <ul class="flex gap-2">
                            ${renderTag(newTags)}
                        </ul>
                    </div>
                </div>
                `,
        );
    });
}

function renderTag(tags) {
    let productSkill = "";
    tags.forEach((tag) => {
        productSkill += `<li class="text-xs bg-gray-950 text-white p-2 rounded-md mt-1">${tag}</li>`;
    });
    return productSkill;
}

getAPI();
