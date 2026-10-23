import Product from "./components/Product.js";
import PRODUCT_API_URL from "./config.js";

const apiURL = PRODUCT_API_URL;
const productList = document.querySelector(".product_list");

async function getAPI() {
    try {
        const response = await fetch(apiURL);
        const apiData = await response.json();
        renderHTML(apiData);
    } catch (error) {
        console.log(error);
    }
}

function renderHTML(data) {
    data.map((d) => {
        productList.insertAdjacentHTML("beforeend", Product(d));
    });
}

getAPI();
