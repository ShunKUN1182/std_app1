const Product = (data) => {
    const deskMaxLength = 18;
    const titleMaxLength = 12;
    const newTags = JSON.parse(data.product_skill);
    const description =
        data.product_desc.length <= deskMaxLength
            ? data.product_desc
            : data.product_desc.slice(0, deskMaxLength) + "...";
    const title =
        data.product_title.length <= titleMaxLength
            ? data.product_title
            : data.product_title.slice(0, titleMaxLength) + "...";

    return `
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
    `;
};

function renderTag(tags) {
    let productSkill = "";
    tags.forEach((tag) => {
        productSkill += `<li class="text-xs bg-gray-950 text-white p-2 rounded-md mt-1">${tag}</li>`;
    });
    return productSkill;
}

export default Product;
